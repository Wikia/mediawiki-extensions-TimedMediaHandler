<?php

namespace MediaWiki\TimedMediaHandler;

use Article;
use DatabaseUpdater;
use DifferenceEngine;
use ExtensionRegistry;
use File;
use ImagePage;
use MediaWiki\Extension\BetaFeatures\BetaFeatures;
use MediaWiki\MediaWikiServices;
use MediaWiki\Revision\RevisionRecord;
use MediaWiki\TimedMediaHandler\WebVideoTranscode\WebVideoTranscode;
use MediaWiki\User\UserIdentity;
use OutputPage;
use ParserOptions;
use ParserOutput;
use RequestContext;
use Skin;
use SkinTemplate;
use Title;
use User;
use WikiPage;

/**
 * Hooks for TimedMediaHandler extension
 *
 * @file
 * @ingroup Extensions
 */
class Hooks {

	/**
	 * Register TimedMediaHandler namespace IDs
	 *
	 * This way if you set a variable like $wgTimedTextNS in LocalSettings.php
	 * after you include TimedMediaHandler we can still read the variable values
	 *
	 * These are configurable due to Commons history: T123823
	 * These need to be before registerhooks due to: T123695
	 *
	 * @param array &$list
	 */
	public static function onCanonicalNamespaces( array &$list ) {
		global $wgEnableLocalTimedText, $wgTimedTextNS;
		if ( $wgEnableLocalTimedText ) {
			if ( !defined( 'NS_TIMEDTEXT' ) ) {
				define( 'NS_TIMEDTEXT', $wgTimedTextNS );
				define( 'NS_TIMEDTEXT_TALK', $wgTimedTextNS + 1 );
			}

			$list[NS_TIMEDTEXT] = 'TimedText';
			$list[NS_TIMEDTEXT_TALK] = 'TimedText_talk';
		} else {
			$wgTimedTextNS = false;
		}
	}

	/**
	 * Register remaining TimedMediaHandler hooks right after initial setup
	 *
	 * TODO: This function shouldn't need to exist.
	 *
	 * @return bool
	 */
	public static function register() {
		global $wgJobTypesExcludedFromDefaultQueue,
		$wgExcludeFromThumbnailPurge,
		$wgFileExtensions, $wgTmhEnableMp4Uploads,
		$wgMwEmbedModuleConfig, $wgEnableLocalTimedText, $wgTmhFileExtensions;

		$wgFileExtensions = array_merge( $wgFileExtensions, $wgTmhFileExtensions );

		// Remove mp4 if not enabled:
		if ( $wgTmhEnableMp4Uploads === false ) {
			$index = array_search( 'mp4', $wgFileExtensions, true );
			if ( $index !== false ) {
				array_splice( $wgFileExtensions, $index, 1 );
			}
		}

		// Transcode jobs must be explicitly requested from the job queue:
		$wgJobTypesExcludedFromDefaultQueue[] = 'webVideoTranscode';

		// Exclude transcoded assets from normal thumbnail purging
		// ( a maintenance script could handle transcode asset purging)
		if ( isset( $wgExcludeFromThumbnailPurge ) ) {
			$wgExcludeFromThumbnailPurge = array_merge( $wgExcludeFromThumbnailPurge, $wgTmhFileExtensions );
			// Also add the .log file ( used in two pass encoding )
			// ( probably should move in-progress encodes out of web accessible directory )
			$wgExcludeFromThumbnailPurge[] = 'log';
		}

		if ( !$wgEnableLocalTimedText ) {
			// overwrite TimedText.ShowInterface for video with mw-provider=local
			$wgMwEmbedModuleConfig['TimedText.ShowInterface.local'] = 'off';
		}

		// validate enabled transcodeset values
		WebVideoTranscode::validateTranscodeConfiguration();
		return true;
	}

	/**
	 * @param ImagePage $imagePage the imagepage that is being rendered
	 * @param OutputPage $out the output for this imagepage
	 * @return bool
	 */
	public static function onImageOpenShowImageInlineBefore( ImagePage $imagePage, OutputPage $out ) {
		$file = $imagePage->getDisplayedFile();
		return self::onImagePageHooks( $file, $out );
	}

	/**
	 * @param ImagePage $imagePage that is being rendered
	 * @param File $file the (old) file added in this history entry
	 * @param string &$line the HTML of the history line
	 * @param string &$css the CSS class of the history line
	 * @return bool
	 */
	public static function onImagePageFileHistoryLine( $imagePage, $file, &$line, &$css ) {
		$out = $imagePage->getContext()->getOutput();
		return self::onImagePageHooks( $file, $out );
	}

	/**
	 * @param File $file the file that is being rendered
	 * @param OutputPage $out the output to which this file is being rendered
	 * @return bool
	 */
	private static function onImagePageHooks( $file, $out ) {
		$handler = $file->getHandler();
		if ( $handler instanceof TimedMediaHandler ) {
			if ( self::activePlayerMode() === 'mwembed' ) {
				$out->addModuleStyles( 'ext.tmh.thumbnail.styles' );
				$out->addModules( [
					'mw.MediaWikiPlayer.loader',
					'mw.PopUpMediaTransform',
					'mw.TMHGalleryHook.js',
				] );
			}

			if ( self::activePlayerMode() === 'videojs' ) {
				$out->addModuleStyles( 'ext.tmh.player.styles' );
				$out->addModules( 'ext.tmh.player' );
			}
		}
		return true;
	}

	/**
	 * @param Title $title
	 * @param Article|null &$article
	 * @return bool
	 */
	public static function checkForTimedTextPage( Title $title, ?Article &$article ) {
		global $wgEnableLocalTimedText;
		if ( !$wgEnableLocalTimedText ) {
			return true;
		}

		global $wgTimedTextNS;
		if ( $title->getNamespace() === $wgTimedTextNS ) {
			$article = new TimedTextPage( $title );
		}
		return true;
	}

	/**
	 * @param DifferenceEngine $diffEngine
	 * @param OutputPage $output
	 * @return bool
	 */
	public static function checkForTimedTextDiff( $diffEngine, $output ) {
		global $wgEnableLocalTimedText;
		if ( !$wgEnableLocalTimedText ) {
			return true;
		}

		global $wgTimedTextNS;
		if ( $output->getTitle()->getNamespace() === $wgTimedTextNS ) {
			$article = new TimedTextPage( $output->getTitle() );
			$article->renderOutput( $output );
			return false;
		}
		return true;
	}

	/**
	 * @param SkinTemplate &$sktemplate
	 * @param array &$links
	 */
	public static function onSkinTemplateNavigation( SkinTemplate &$sktemplate, array &$links ) {
		global $wgEnableLocalTimedText;
		if ( !$wgEnableLocalTimedText ) {
			return;
		}

		if ( self::isTimedMediaHandlerTitle( $sktemplate->getTitle() ) ) {
			$ttTitle = Title::makeTitleSafe( NS_TIMEDTEXT, $sktemplate->getTitle()->getDBkey() );
			if ( !$ttTitle ) {
				return;
			}
			$links[ 'namespaces' ][ 'timedtext' ] =
				$sktemplate->tabAction( $ttTitle, 'timedtext', false, '', false );
		}
	}

	/**
	 * Wraps the isTranscodableFile function
	 * @param Title $title
	 * @return bool
	 */
	public static function isTranscodableTitle( $title ) {
		if ( $title->getNamespace() !== NS_FILE ) {
			return false;
		}
		$file = MediaWikiServices::getInstance()->getRepoGroup()->findFile( $title );
		return self::isTranscodableFile( $file );
	}

	/**
	 * Utility function to check if a given file can be "transcoded"
	 * @param File $file File object
	 * @return bool
	 */
	public static function isTranscodableFile( $file ) {
		global $wgEnableTranscode, $wgEnabledAudioTranscodeSet;

		// don't show the transcode table if transcode is disabled
		if ( !$wgEnableTranscode && !$wgEnabledAudioTranscodeSet ) {
			return false;
		}
		// Can't find file
		if ( !$file ) {
			return false;
		}
		// We can only transcode local files
		if ( !$file->isLocal() ) {
			return false;
		}

		$handler = $file->getHandler();
		// Not able to transcode files without handler
		if ( !$handler ) {
			return false;
		}
		$mediaType = $handler->getMetadataType( $file );
		// If ogg or webm format and not audio we can "transcode" this file
		$isAudio = $handler instanceof TimedMediaHandler && $handler->isAudio( $file );
		if ( ( $mediaType === 'webm' || $mediaType === 'ogg'
				|| $mediaType === 'mp4' || $mediaType === 'mpeg' )
			&& !$isAudio
		) {
			return true;
		}
		if ( $isAudio && count( $wgEnabledAudioTranscodeSet ) ) {
			return true;
		}
		return false;
	}

	/**
	 * @param Title $title
	 * @return bool
	 */
	public static function isTimedMediaHandlerTitle( $title ) {
		if ( !$title->inNamespace( NS_FILE ) ) {
			return false;
		}
		$file = MediaWikiServices::getInstance()->getRepoGroup()->findFile( $title );
		// Can't find file
		if ( !$file ) {
			return false;
		}
		$handler = $file->getHandler();
		if ( !$handler ) {
			return false;
		}
		return $handler instanceof TimedMediaHandler;
	}

	/**
	 * @param Article $article
	 * @param string &$html
	 * @return bool
	 */
	public static function checkForTranscodeStatus( $article, &$html ) {
		// load the file:
		$file = MediaWikiServices::getInstance()->getRepoGroup()->findFile( $article->getTitle() );
		if ( self::isTranscodableFile( $file ) ) {
			$html .= TranscodeStatusTable::getHTML( $file, $article->getContext() );
		}
		return true;
	}

	/**
	 * @param File $file LocalFile object
	 * @param bool $reupload
	 * @param bool $hasNewPageContent
	 * @return bool
	 */
	public static function onFileUpload( $file, $reupload, $hasNewPageContent ) {
		// Check that the file is a transcodable asset:
		if ( $file && self::isTranscodableFile( $file ) ) {
			// Remove all the transcode files and db states for this asset
			WebVideoTranscode::removeTranscodes( $file );
			WebVideoTranscode::startJobQueue( $file );
		}
		return true;
	}

	/**
	 * Handle moved titles
	 *
	 * For now we just remove all the derivatives for the oldTitle. In the future we could
	 * look at moving the files, but right now thumbs are not moved, so I don't want to be
	 * inconsistent.
	 * @param Title $title
	 * @param Title $newTitle
	 * @param User $user
	 * @return bool
	 */
	public static function checkTitleMove( $title, $newTitle, $user ) {
		if ( self::isTranscodableTitle( $title ) ) {
			// Remove all the transcode files and db states for this asset
			// ( will be re-added the first time the asset is displayed with its new title )
			$file = MediaWikiServices::getInstance()->getRepoGroup()->findFile( $title );
			WebVideoTranscode::removeTranscodes( $file );
		}
		return true;
	}

	/**
	 * Hook to FileDeleteComplete
	 * remove transcodes on delete
	 * @param File $file
	 * @param File|false $oldimage
	 * @param Article $article
	 * @param User $user
	 * @param string $reason
	 * @return bool
	 */
	public static function onFileDeleteComplete( $file, $oldimage, $article, $user, $reason ) {
		if ( !$oldimage && self::isTranscodableFile( $file ) ) {
			WebVideoTranscode::removeTranscodes( $file );
		}
		return true;
	}

	/**
	 * If file gets reverted to a previous version, reset transcodes.
	 *
	 * @param WikiPage $wikiPage
	 * @param RevisionRecord $rev
	 * @param int $baseID
	 * @param UserIdentity $user
	 *
	 * @return bool
	 */
	public static function onRevisionFromEditComplete(
		WikiPage $wikiPage, RevisionRecord $rev, $baseID, UserIdentity $user
	) {
		// Check if the article is a file and remove transcode files:
		if ( ( $baseID !== false ) && $wikiPage->getTitle()->getNamespace() === NS_FILE ) {
			$file = MediaWikiServices::getInstance()->getRepoGroup()->findFile( $wikiPage->getTitle() );
			if ( self::isTranscodableFile( $file ) ) {
				WebVideoTranscode::removeTranscodes( $file );
				WebVideoTranscode::startJobQueue( $file );
			}
		}
		return true;
	}

	/**
	 * When a user asks for a purge, perhaps through our handy "update transcode status"
	 * link, make sure we've got the updated set of transcodes. This'll allow a user or
	 * automated process to see their status and reset them.
	 *
	 * @param WikiPage $article
	 * @return bool
	 */
	public static function onArticlePurge( WikiPage $article ) {
		if ( $article->getTitle()->getNamespace() === NS_FILE ) {
			$file = MediaWikiServices::getInstance()->getRepoGroup()->findFile( $article->getTitle() );
			if ( self::isTranscodableFile( $file ) ) {
				WebVideoTranscode::cleanupTranscodes( $file );
			}
		}
		return true;
	}

	/**
	 * @param array &$globals
	 */
	public static function onParserTestGlobals( &$globals ) {
		// reset player serial so that parser tests are not order-dependent
		TimedMediaTransformOutput::resetSerialForTest();

		$globals['wgEnableTranscode'] = false;
		$globals['wgFFmpegLocation'] = '/usr/bin/ffmpeg';
	}

	/**
	 * Add JavaScript and CSS for special pages that may include timed media
	 * but which will not fire the parser hook.
	 *
	 * FIXME: There ought to be a better interface for determining whether the
	 * page is liable to contain timed media.
	 *
	 * @param OutputPage $out
	 * @param Skin $sk
	 * @return bool
	 */
	public static function pageOutputHook( OutputPage $out, Skin $sk ) {
		global $wgTimedTextNS;

		$title = $out->getTitle();
		$namespace = $title->getNamespace();
		$addModules = false;

		if ( $namespace === NS_CATEGORY || $namespace === $wgTimedTextNS ) {
			$addModules = true;
		}

		if ( $title->isSpecialPage() ) {
			[ $name, /* subpage */ ] = MediaWikiServices::getInstance()
				->getSpecialPageFactory()->resolveAlias( $title->getDBkey() );
			if (
				$name === 'Search' || $name === 'GlobalUsage' || $name === 'Upload' ||
				stripos( $name, 'file' ) !== false || stripos( $name, 'image' ) !== false
			) {
					$addModules = true;
			}
		}

		if ( $addModules ) {
			if ( self::activePlayerMode() === 'mwembed' ) {
				$out->addModuleStyles( 'ext.tmh.thumbnail.styles' );
				$out->addModules( [
					'mw.MediaWikiPlayer.loader',
					'mw.PopUpMediaTransform',
				] );
			}

			if ( self::activePlayerMode() === 'videojs' ) {
				$out->addModuleStyles( 'ext.tmh.player.styles' );
				$out->addModules( 'ext.tmh.player' );
			}
		}

		return true;
	}

	/**
	 * @param DatabaseUpdater $updater
	 * @return bool
	 */
	public static function checkSchemaUpdates( DatabaseUpdater $updater ) {
		$dir = dirname( __DIR__ ) . '/sql/';
		$dbType = $updater->getDB()->getType();
		if ( $dbType === 'mysql' ) {
			$updater->addExtensionTable( 'transcode',
				$dir . 'tables-generated.sql'
			);
			$updater->addExtensionIndex( 'transcode', 'transcode_name_key',
				$dir . 'transcode_name_key.sql'
			);
		} elseif ( $dbType === 'sqlite' ) {
			$updater->addExtensionTable( 'transcode',
				$dir . 'sqlite/tables-generated.sql'
			);
		} elseif ( $dbType === 'postgres' ) {
			$updater->addExtensionTable( 'transcode',
				$dir . 'postgres/tables-generated.sql'
			);
		}
		$dirPatch = $dbType === 'mysql' ? $dir : $dir . $dbType . '/';
		$updater->modifyExtensionField(
			'transcode', 'transcode_time_error', $dirPatch . 'patch-transcode-transcode_timestamp.sql'
		);

		return true;
	}

	/**
	 * @param array &$qp
	 */
	public static function onwgQueryPages( &$qp ) {
		$qp[] = [ SpecialOrphanedTimedText::class, 'OrphanedTimedText' ];
	}

	/**
	 * Return false here to regenerate the ParserOutput even if there's a viable cache entry.
	 *
	 * This gets called on logged-in page views and CDN cache misses when there's an entry
	 * that matches the page rendering hash and hasn't expired yet, allowing us to sometimes
	 * reject it and regenerate it right away, ahead of its expiry date.
	 *
	 * @param ParserOutput $parserOutput
	 * @param WikiPage $wikiPage
	 * @param ParserOptions $parserOptions
	 * @return bool
	 */
	public static function onRejectParserCacheValue( $parserOutput, $wikiPage, $parserOptions ) {
		// Per the onPageRenderingHash() handler below, when the default changes from
		// Kaltura to videojs, we let take effect slowly during the natural rollover of
		// canonical parser cache entries.
		//
		// For users that have opted-in to videojs (which is mostly a no-op when the default
		// is videojs), trigger a regeneration right away if we encounter an older cache
		// entry that contains Kaltura.
		//
		// Again, it's important that we don't do this unconditionally for all traffic, but
		// we can let beta user pageviews speed up the regeneration cycle a little, and has
		// the benefit of giving them a consistent post-transition experience, without
		// any stale Kaltura pageviews between the default changing and the end of this
		// transition period.
		$useCache = true;

		if (
			// This page involves TMH,
			$parserOutput->getExtensionData( 'mw_ext_TMH_hasTimedMediaTransform' ) &&
			// and this wiki switched its default to videojs,
			self::defaultPlayerMode() === 'videojs' &&
			// and this cache entry uses Kaltura still
			in_array( 'mw.MediaWikiPlayer.loader', $parserOutput->getModules(), true ) &&
			// and we're viewed by a videojs beta user
			self::hasEnabledVideojsBeta()
		) {
			// Accept cache miss, regenerate now.
			$useCache = false;
		}

		return $useCache;
	}

	/**
	 * @param string &$hash
	 * @param User $user
	 * @param array &$forOptions
	 */
	public static function onPageRenderingHash( &$hash, User $user, &$forOptions ) {
		// Performance: Do not vary or mass-invalidate the ParserCache when the
		// default changes. When defaults change, we'll slowly propagate as things
		// get edited, purged, or expire naturally from the cache.
		//
		// For users that opt-in to videojs ahead of time, we must use a dedicated
		// hash as otherwise their pageviews would poison the cache for everyone else.
		if ( self::defaultPlayerMode() !== 'videojs' && self::activePlayerMode() === 'videojs' ) {
			$hash .= '!tmh-videojs';
		}
	}

	/**
	 * @param User $user
	 * @param array &$prefs
	 */
	public static function onGetBetaFeaturePreferences( $user, &$prefs ) {
		$config = MediaWikiServices::getInstance()->getMainConfig();
		$iconpath = $config->get( 'ExtensionAssetsPath' ) . "/TimedMediaHandler";

		if ( $config->get( 'TmhUseBetaFeatures' ) ) {
			$prefs['tmh-videojs'] = [
				'label-message' => 'beta-feature-timedmediahandler-message-videojs',
				'desc-message' => 'beta-feature-timedmediahandler-description-videojs',
				'screenshot' => [
					'ltr' => "$iconpath/resources/betafeatures-icon-VideoJS-ltr.svg",
					'rtl' => "$iconpath/resources/betafeatures-icon-VideoJS-rtl.svg",
				],
				'info-link' =>
					'https://www.mediawiki.org/wiki/Extension:TimedMediaHandler/VideoJS_Player',
				'discussion-link' =>
					'https://www.mediawiki.org/wiki/Extension_talk:TimedMediaHandler/VideoJS_Player',
				'requirements' => [
					'javascript' => true
				],

			];
		}
	}

	/**
	 * Add default preferences values
	 *
	 * @param array &$defaultOptions Array of preference keys and their default values.
	 */
	public static function onUserGetDefaultOptions( &$defaultOptions ) {
		$config = MediaWikiServices::getInstance()->getMainConfig();

		if ( $config->get( 'TmhUseBetaFeatures' ) ) {
			$defaultOptions['tmh-videojs'] = false;
		}
	}

	/**
	 * Whether this user has opt-ed into videojs via a beta feature.
	 *
	 * @return bool
	 */
	private static function hasEnabledVideojsBeta(): bool {
		$config = MediaWikiServices::getInstance()->getMainConfig();
		$context = RequestContext::getMain();

		return (
			$config->get( 'TmhUseBetaFeatures' )
			&& ExtensionRegistry::getInstance()->isLoaded( 'BetaFeatures' )
			&& $context->getUser()->isSafeToLoad()
			&& BetaFeatures::isFeatureEnabled( $context->getUser(), 'tmh-videojs' )
		);
	}

	/**
	 * Return the configured player mode for this user
	 * @return string
	 */
	public static function activePlayerMode() {
		if ( self::hasEnabledVideojsBeta() ) {
			return 'videojs';
		}

		return self::defaultPlayerMode();
	}

	/**
	 * Return the default configured player mode
	 * This mode is used for anonymous users
	 * @since 1.30
	 * @return string
	 */
	public static function defaultPlayerMode() {
		global $wgTmhWebPlayer;
		return $wgTmhWebPlayer;
	}

	/**
	 * @param array &$vars
	 */
	public static function onResourceLoaderGetConfigVars( &$vars ) {
		// Allow localSettings.php to override any module config by updating $wgMwEmbedModuleConfig var
		global $wgMwEmbedModuleConfig;
		$vars['wgTimedMediaHandler'] = $wgMwEmbedModuleConfig;
	}
}