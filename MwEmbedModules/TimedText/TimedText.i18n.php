<?php
/**
 * Internationalisation for TimedText
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

$messages['en'] = array(
	'mwe-timedtext-editor' => 'Timed text editor',
	'mwe-timedtext-stage-transcribe' => 'Transcribe',
	'mwe-timedtext-stage-sync' => 'Sync',
	'mwe-timedtext-stage-translate' => 'Translate',
	'mwe-timedtext-stage-upload' => 'Upload from local file',
	'mwe-timedtext-select-language' => 'Select language',
	'mwe-timedtext-file-language' => 'Subtitle file language',
	'mwe-timedtext-upload-text' => 'Upload text file',
	'mwe-timedtext-uploading-text' => 'Uploading text file',
	'mwe-timedtext-upload-text-desc-title' => 'Upload a text file',
	'mwe-timedtext-upload-text-desc-help' => 'The upload text file interface accepts .srt files',
	'mwe-timedtext-upload-text-desc-help-browse' => 'Browse your local computer for the .srt file you want to upload',
	'mwe-timedtext-upload-text-desc-help-select' => 'Select the language of the file',
	'mwe-timedtext-upload-text-desc-help-review' => 'Review / edit the text content and then press upload to add the text',
	'mwe-timedtext-upload-text-preview' => 'Review text',
	'mwe-timedtext-upload-text-success' => 'Upload of timed text was successful',
	'mwe-timedtext-upload-text-done' => 'Upload done',
	'mwe-timedtext-upload-text-fail-desc' => 'Upload was unsuccessful',
	'mwe-timedtext-upload-text-fail-title' => 'Upload failed',
	'mwe-timedtext-upload-text-another' => 'Upload another',
	'mwe-timedtext-upload-text-done-uploading' => 'Done uploading',
	'mwe-timedtext-back-btn' => 'Back',
	'mwe-timedtext-choose-text' => 'Choose text',
	'mwe-timedtext-upload-timed-text' => 'Add subtitles',
	'mwe-timedtext-loading-text-edit' => 'Loading timed text editor',
	'mwe-timedtext-search' => 'Search clip',
	'mwe-timedtext-layout' => 'Layout',
	'mwe-timedtext-layout-ontop' => 'On top of video',
	'mwe-timedtext-layout-below' => 'Below video',
	'mwe-timedtext-layout-off' => 'Hide subtitles',
	'mwe-timedtext-loading-text' => 'Loading text ...',
	'mwe-timedtext-key-language' => '$1, $2',
	'mwe-timedtext-textcat-cc' => 'Captions',
	'mwe-timedtext-textcat-sub' => 'Subtitles',
	'mwe-timedtext-textcat-tad' => 'Audio description',
	'mwe-timedtext-textcat-ktv' => 'Karaoke',
	'mwe-timedtext-textcat-tik' => 'Ticker text',
	'mwe-timedtext-textcat-ar' => 'Active regions',
	'mwe-timedtext-textcat-nb' => 'Annotation',
	'mwe-timedtext-textcat-meta' => 'Timed metadata',
	'mwe-timedtext-textcat-trx' => 'Transcript',
	'mwe-timedtext-textcat-lrc' => 'Lyrics',
	'mwe-timedtext-textcat-lin' => 'Linguistic markup',
	'mwe-timedtext-textcat-cue' => 'Cue points',
	'mwe-timedtext-language-subtitles-for-clip' => '$1 subtitles for clip: $2',
	'mwe-timedtext-language-no-subtitles-for-clip' => 'No $1 subtitles were found for clip: $2',
	'mwe-timedtext-request-subs' => 'Request transcription',
	'mwe-timedtext-no-subs' => 'No text tracks available',
	'mwe-timedtext-request-subs-desc' => 'Add a request for this video file to be transcribed',
	'mwe-timedtext-request-subs-done' => 'Transcription request added. [$1 See all transcribe requests]',
	'mwe-timedtext-request-subs-fail' => 'Failed to add transcription request. Are you logged in?',
	'mwe-timedtext-request-already-done' => 'A transcription of this video has already been requested. [$1 See all transcribe requests]',
);

/** Message documentation (Message documentation)
 * @author EugeneZelenko
 * @author Siebrand
 * @author Umherirrender
 */
$messages['qqq'] = array(
	'mwe-timedtext-stage-translate' => '{{Identical|Translate}}',
	'mwe-timedtext-back-btn' => '{{Identical|Back}}',
	'mwe-timedtext-key-language' => '{{optional}}',
	'mwe-timedtext-textcat-cc' => '{{Identical|Caption}}',
	'mwe-timedtext-textcat-nb' => '{{Identical|Annotation}}',
	'mwe-timedtext-language-subtitles-for-clip' => 'Parameters:
* $1 is a language name.
* $2 is a file link with a file name as link description.',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'mwe-timedtext-stage-translate' => 'Vertaal',
	'mwe-timedtext-select-language' => 'Kies taal',
	'mwe-timedtext-upload-text-preview' => 'Hersien teks',
	'mwe-timedtext-back-btn' => 'Terug',
	'mwe-timedtext-choose-text' => 'Kies teks',
	'mwe-timedtext-layout' => 'Uitleg',
	'mwe-timedtext-textcat-cc' => 'Onderskrifte',
	'mwe-timedtext-textcat-lrc' => 'Lirieke',
);

/** Arabic (العربية)
 * @author Meno25
 * @author روخو
 */
$messages['ar'] = array(
	'mwe-timedtext-stage-transcribe' => 'دون',
	'mwe-timedtext-stage-sync' => 'تزامن',
	'mwe-timedtext-stage-translate' => 'ترجمة',
	'mwe-timedtext-stage-upload' => 'رفع من ملف محلي',
	'mwe-timedtext-select-language' => 'اختر اللغة',
	'mwe-timedtext-file-language' => 'عنوان ملف اللغة الفرعي',
	'mwe-timedtext-upload-text' => 'رفع ملف نصي',
	'mwe-timedtext-uploading-text' => 'جاري رفع الملف النصي',
	'mwe-timedtext-upload-text-desc-title' => 'رفع الملف النصي',
	'mwe-timedtext-upload-text-desc-help-select' => 'حدد لغة الملف',
	'mwe-timedtext-upload-text-desc-help-review' => 'راجع/حرر محتوى النص ثم اضغط على زر رفع لإضافة نص',
	'mwe-timedtext-upload-text-preview' => 'مراجعة النص',
	'mwe-timedtext-upload-text-done' => 'انتهت عملية الرفع',
	'mwe-timedtext-upload-text-fail-desc' => 'عملية الرفع لم تنجح',
	'mwe-timedtext-upload-text-fail-title' => 'فشل في رفع الملف',
	'mwe-timedtext-upload-text-another' => 'رفع ملف اخر',
	'mwe-timedtext-upload-text-done-uploading' => 'انتهى الرفع',
	'mwe-timedtext-back-btn' => 'رجوع',
	'mwe-timedtext-choose-text' => 'اختر نص',
	'mwe-timedtext-upload-timed-text' => 'إضافة الترجمات',
	'mwe-timedtext-search' => 'البحث عن مقطع',
	'mwe-timedtext-layout' => 'مخرجات',
	'mwe-timedtext-layout-ontop' => 'في أعلى الفيديو',
	'mwe-timedtext-layout-off' => 'إخفاء الترجمات',
	'mwe-timedtext-loading-text' => 'جاري تحميل النص...',
	'mwe-timedtext-textcat-cc' => 'نصوص توضيحية',
	'mwe-timedtext-textcat-cue' => 'نقاط تلميح',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author EugeneZelenko
 * @author Jim-by
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'mwe-timedtext-editor' => 'Рэдактар сынхранізаванага тэксту',
	'mwe-timedtext-stage-transcribe' => 'Пераўтвараць',
	'mwe-timedtext-stage-sync' => 'Сынхранізаваць',
	'mwe-timedtext-stage-translate' => 'Перакласьці',
	'mwe-timedtext-stage-upload' => 'Загрузіць з лякальнага файла',
	'mwe-timedtext-select-language' => 'Выберыце мову',
	'mwe-timedtext-file-language' => 'Мова файла субтытраў',
	'mwe-timedtext-upload-text' => 'Загрузіць тэкставы файл',
	'mwe-timedtext-uploading-text' => 'Загрузка тэкставага файла',
	'mwe-timedtext-upload-text-desc-title' => 'Загрузіць тэкставы файл',
	'mwe-timedtext-upload-text-desc-help' => 'Інтэрфэйс загрузкі тэкставых файлаў прымае файлы з пашырэньнем .srt',
	'mwe-timedtext-upload-text-desc-help-browse' => 'Знайдзіце на Вашым лякальным кампутары файл з пашырэньнем .srt, які Вы жадаеце загрузіць',
	'mwe-timedtext-upload-text-desc-help-select' => 'Выберыце мову файла',
	'mwe-timedtext-upload-text-desc-help-review' => 'Праверце / адрэдагуйце зьмест тэксту і потым націсьніце «Загрузіць», каб дадаць тэкст',
	'mwe-timedtext-upload-text-preview' => 'Праверыць тэкст',
	'mwe-timedtext-upload-text-success' => 'Загрузка сынхранізаванага тэксту адбылася пасьпяхова',
	'mwe-timedtext-upload-text-done' => 'Загрузка выкананая',
	'mwe-timedtext-upload-text-fail-desc' => 'Загрузка не атрымалася',
	'mwe-timedtext-upload-text-fail-title' => 'Памылка загрузкі',
	'mwe-timedtext-upload-text-another' => 'Дадаць іншы',
	'mwe-timedtext-upload-text-done-uploading' => 'Загрузка выкананая',
	'mwe-timedtext-back-btn' => 'Вярнуцца',
	'mwe-timedtext-choose-text' => 'Выберыце тэкст',
	'mwe-timedtext-upload-timed-text' => 'Дадаць субтытры',
	'mwe-timedtext-loading-text-edit' => 'Загрузка рэдактара сынхранізаванага тэксту',
	'mwe-timedtext-search' => 'Пошук кліпу',
	'mwe-timedtext-layout' => 'Разьмяшчэньне',
	'mwe-timedtext-layout-ontop' => 'На версе відэа',
	'mwe-timedtext-layout-below' => 'Унізе відэа',
	'mwe-timedtext-layout-off' => 'Схаваць субтытры',
	'mwe-timedtext-loading-text' => 'Загрузка тэксту…',
	'mwe-timedtext-textcat-cc' => 'Субтытры',
	'mwe-timedtext-textcat-sub' => 'Субтытры:',
	'mwe-timedtext-textcat-tad' => 'Аўдыя-апісаньне',
	'mwe-timedtext-textcat-ktv' => 'Караоке',
	'mwe-timedtext-textcat-tik' => 'Тэкставыя карткі',
	'mwe-timedtext-textcat-ar' => 'Актыўныя рэгіёны',
	'mwe-timedtext-textcat-nb' => 'Анатацыя',
	'mwe-timedtext-textcat-meta' => 'Сынхранізаваныя мета-зьвесткі',
	'mwe-timedtext-textcat-trx' => 'Стэнаграма',
	'mwe-timedtext-textcat-lrc' => 'Словы',
	'mwe-timedtext-textcat-lin' => 'Лінгвістычная разьметка',
	'mwe-timedtext-textcat-cue' => 'Сыгнальныя кропкі',
	'mwe-timedtext-language-subtitles-for-clip' => '$1 субтытры для кліпу: $2',
	'mwe-timedtext-language-no-subtitles-for-clip' => 'Субтытры $1 для кліпу ня знойдзеныя: $2',
	'mwe-timedtext-request-subs' => 'Запытаць транскрыпцыю',
	'mwe-timedtext-no-subs' => 'Субтытраў няма',
	'mwe-timedtext-request-subs-desc' => 'Дадаць запыт на транскрыпцыю гэтага відэа',
	'mwe-timedtext-request-subs-done' => 'Запыт на транскрыпцыю зроблены. [$1 Усе запыты на транскрыпцыю]',
	'mwe-timedtext-request-subs-fail' => 'Немагчыма дадаць запыт на транскрыпцыю. Ці ўвайшлі Вы ў сыстэму?',
	'mwe-timedtext-request-already-done' => 'Запыт на транскрыпцыю відэа ўжо быў пададзены. [$1 Усе запыты на транскрыпцыю]',
);

/** Bengali (বাংলা)
 * @author Bellayet
 */
$messages['bn'] = array(
	'mwe-timedtext-stage-translate' => 'অনুবাদ',
);

/** Breton (brezhoneg)
 * @author Fulup
 * @author Y-M D
 */
$messages['br'] = array(
	'mwe-timedtext-editor' => 'Embanner testennoù sinkronelaet',
	'mwe-timedtext-stage-transcribe' => 'Treuzskrivañ',
	'mwe-timedtext-stage-sync' => 'Kempredañ',
	'mwe-timedtext-stage-translate' => 'Treiñ',
	'mwe-timedtext-stage-upload' => "Kargañ eus ur restr lec'hel",
	'mwe-timedtext-select-language' => 'Dibab ar yezh',
	'mwe-timedtext-file-language' => 'Yezh ar restr istitloù',
	'mwe-timedtext-upload-text' => 'Enporzhiañ ar restr testenn',
	'mwe-timedtext-uploading-text' => 'O kargañ ar restr testenn',
	'mwe-timedtext-upload-text-desc-title' => 'Enporzhiañ ur restr testenn',
	'mwe-timedtext-upload-text-desc-help' => 'An etrefas kargañ restroù testenn a aotre ar restroù .srt',
	'mwe-timedtext-upload-text-desc-help-browse' => "Furchit en ho urzhiataer lec'hel evit kavout ar restr .srt hoc'h eus c'hoant da gargañ",
	'mwe-timedtext-upload-text-desc-help-select' => 'Dibabit yezh ar restr',
	'mwe-timedtext-upload-text-desc-help-review' => 'Gwiriañ / Kemmañ danvez ar skrid ha pouezañ war enporzhiañ evit ouzhpennañ an destenn.',
	'mwe-timedtext-upload-text-preview' => 'Gwiriekaat an destenn',
	'mwe-timedtext-upload-text-success' => 'Enporzhiet eo bet an destenn sinkronelaet ervat.',
	'mwe-timedtext-upload-text-done' => 'Graet eo ar gargadenn',
	'mwe-timedtext-upload-text-fail-desc' => "C'hwitet eo bet an enporzhiañ",
	'mwe-timedtext-upload-text-fail-title' => "Enporzhiadenn c'hwitet",
	'mwe-timedtext-upload-text-another' => 'Kargañ unan all',
	'mwe-timedtext-upload-text-done-uploading' => 'Kargadenn graet',
	'mwe-timedtext-back-btn' => 'Distreiñ',
	'mwe-timedtext-choose-text' => 'Dibab an destenn',
	'mwe-timedtext-upload-timed-text' => 'Enporzhiañ istitloù', # Fuzzy
	'mwe-timedtext-loading-text-edit' => 'O kargañ an embanner testennoù sinkronelaet',
	'mwe-timedtext-search' => "Klask ar c'hlip",
	'mwe-timedtext-layout' => "Lec'hiadur",
	'mwe-timedtext-layout-ontop' => 'E penn ar video',
	'mwe-timedtext-layout-below' => 'Dindan ar video',
	'mwe-timedtext-layout-off' => 'Kuzhat an istitloù',
	'mwe-timedtext-loading-text' => 'O kargañ an destenn...',
	'mwe-timedtext-textcat-cc' => "Alc'hwezioù",
	'mwe-timedtext-textcat-sub' => 'Istitloù',
	'mwe-timedtext-textcat-tad' => 'Deskrivadur son',
	'mwe-timedtext-textcat-ktv' => 'Karaoke',
	'mwe-timedtext-textcat-tik' => 'Barenn titouroù',
	'mwe-timedtext-textcat-ar' => 'Rannvroioù oberiant',
	'mwe-timedtext-textcat-nb' => 'Notennadur',
	'mwe-timedtext-textcat-meta' => 'Metaroadennoù sinkronelaet',
	'mwe-timedtext-textcat-trx' => 'Treuzskrivañ',
	'mwe-timedtext-textcat-lrc' => 'Komzoù',
	'mwe-timedtext-textcat-lin' => 'Balizennoù yezhel',
	'mwe-timedtext-textcat-cue' => "Poent lec'hiañ",
	'mwe-timedtext-language-subtitles-for-clip' => "$1 istitl evit ar c'hlip : $2",
	'mwe-timedtext-language-no-subtitles-for-clip' => "N'eo ket bet kavet $1 istitl evit ar c'hlip : $2",
	'mwe-timedtext-request-subs' => 'Goulenn treuzkrivadur',
	'mwe-timedtext-request-subs-desc' => 'Goulenn ma vo treuzskrivet ar restr video-mañ',
	'mwe-timedtext-request-subs-done' => "Ouzhpennet eo bet ar goulenn treuzskrivañ. [$1 Gwelet an holl c'houlennoù treuzskrivañ]",
	'mwe-timedtext-request-subs-fail' => "N'eus ket bet gallet ouzhpennañ ar goulenn treuzskrivañ. Ha kevreet oc'h ?",
	'mwe-timedtext-request-already-done' => "Goulennet eo bet treuzskrivañ ar video-mañ c'hoazh. [$1 Gwelet an holl c'houlennoù treuzskrivañ]",
);

/** Bosnian (bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'mwe-timedtext-stage-translate' => 'Prevedi',
	'mwe-timedtext-stage-upload' => 'Postavljanje iz lokalne datoteke',
	'mwe-timedtext-select-language' => 'Odaberi jezik',
	'mwe-timedtext-back-btn' => 'Nazad',
	'mwe-timedtext-textcat-sub' => 'Podnaslovi',
	'mwe-timedtext-textcat-tad' => 'Opis zvuka',
);

/** Czech (česky)
 * @author Mormegil
 */
$messages['cs'] = array(
	'mwe-timedtext-editor' => 'Editor titulků',
	'mwe-timedtext-stage-transcribe' => 'Přepis',
	'mwe-timedtext-stage-sync' => 'Synchronizace',
	'mwe-timedtext-stage-translate' => 'Překlad',
	'mwe-timedtext-stage-upload' => 'Načtení místního souboru',
	'mwe-timedtext-select-language' => 'Vyberte jazyk',
	'mwe-timedtext-file-language' => 'Jazyk titulků',
	'mwe-timedtext-upload-text' => 'Načíst textový soubor',
	'mwe-timedtext-uploading-text' => 'Načítá se textový soubor',
	'mwe-timedtext-upload-text-desc-title' => 'Načíst textový soubor',
	'mwe-timedtext-upload-text-preview' => 'Kontrola textu',
	'mwe-timedtext-back-btn' => 'Zpět',
	'mwe-timedtext-choose-text' => 'Zvolit text',
	'mwe-timedtext-loading-text-edit' => 'Načítá se editor titulků',
	'mwe-timedtext-layout' => 'Vzhled',
	'mwe-timedtext-layout-ontop' => 'Přes obraz',
	'mwe-timedtext-layout-below' => 'Pod obrazem',
	'mwe-timedtext-layout-off' => 'Skrýt titulky',
	'mwe-timedtext-loading-text' => 'Načítá se text…',
	'mwe-timedtext-language-subtitles-for-clip' => 'Titulky ke klipu $2 v jazyce $1',
	'mwe-timedtext-language-no-subtitles-for-clip' => 'Ke klipu $2 nebyly nalezeny titulky v jazyce $1',
);

/** German (Deutsch)
 * @author Kghbln
 * @author Metalhead64
 * @author Purodha
 */
$messages['de'] = array(
	'mwe-timedtext-editor' => 'Ermöglicht die Nutzung des „Timed Text“-Editors',
	'mwe-timedtext-stage-transcribe' => 'Abschrift anfertigen',
	'mwe-timedtext-stage-sync' => 'Synchronisieren',
	'mwe-timedtext-stage-translate' => 'Übersetzen',
	'mwe-timedtext-stage-upload' => 'Aus einer lokalen Datei hochladen',
	'mwe-timedtext-select-language' => 'Sprache auswählen',
	'mwe-timedtext-file-language' => 'Sprache der Untertiteldatei',
	'mwe-timedtext-upload-text' => 'Textdatei hochladen',
	'mwe-timedtext-uploading-text' => 'Textdatei wird hochgeladen',
	'mwe-timedtext-upload-text-desc-title' => 'Eine Textdatei hochladen',
	'mwe-timedtext-upload-text-desc-help' => 'Das Interface zum Hochladen von Textdateien akzeptiert SRT-Dateien',
	'mwe-timedtext-upload-text-desc-help-browse' => 'Durchsuche deinen lokalen Computer nach der SRT-Datei, die du hochladen möchtest',
	'mwe-timedtext-upload-text-desc-help-select' => 'Wähle die Sprache der Datei',
	'mwe-timedtext-upload-text-desc-help-review' => 'Sehe den Text durch und bearbeite ihn gegebenenfalls, bevor du ihn mit einem Klick auf „Hochladen“ hinzufügst',
	'mwe-timedtext-upload-text-preview' => 'Text durchsehen',
	'mwe-timedtext-upload-text-success' => 'Das Hochladen des „Timed Text“ war erfolgreich',
	'mwe-timedtext-upload-text-done' => 'Das Hochladen ist abgeschlossen',
	'mwe-timedtext-upload-text-fail-desc' => 'Das Hochladen war nicht erfolgreich',
	'mwe-timedtext-upload-text-fail-title' => 'Das Hochladen ist fehlgeschlagen',
	'mwe-timedtext-upload-text-another' => 'Hochladen einer weiteren',
	'mwe-timedtext-upload-text-done-uploading' => 'Hochladen ist abgeschlossen',
	'mwe-timedtext-back-btn' => 'Zurück',
	'mwe-timedtext-choose-text' => 'Text auswählen',
	'mwe-timedtext-upload-timed-text' => 'Untertitel hinzufügen',
	'mwe-timedtext-loading-text-edit' => 'Lade den Editor für „Timed Text“',
	'mwe-timedtext-search' => 'Suche den Videoclip',
	'mwe-timedtext-layout' => 'Ausrichtung',
	'mwe-timedtext-layout-ontop' => 'Oberhalb des Videoclips',
	'mwe-timedtext-layout-below' => 'Unterhalb des Videoclips',
	'mwe-timedtext-layout-off' => 'Untertitel ausblenden',
	'mwe-timedtext-loading-text' => 'Text wird geladen …',
	'mwe-timedtext-textcat-cc' => 'Legenden',
	'mwe-timedtext-textcat-sub' => 'Untertitel',
	'mwe-timedtext-textcat-tad' => 'Beschreibung (Audio)',
	'mwe-timedtext-textcat-ktv' => 'Karaoke',
	'mwe-timedtext-textcat-tik' => 'Text-Ticker',
	'mwe-timedtext-textcat-ar' => 'Aktive Regionen',
	'mwe-timedtext-textcat-nb' => 'Annotation',
	'mwe-timedtext-textcat-meta' => '„Timed Text“-Metadaten',
	'mwe-timedtext-textcat-trx' => 'Abschrift',
	'mwe-timedtext-textcat-lrc' => 'Liedtext',
	'mwe-timedtext-textcat-lin' => 'Sprachliche Beschreibung',
	'mwe-timedtext-textcat-cue' => 'Cue-Punkte',
	'mwe-timedtext-language-subtitles-for-clip' => '$1 Untertitel für den Videoclip gefunden: $2',
	'mwe-timedtext-language-no-subtitles-for-clip' => 'Keine $1 Untertitel für den Videoclip gefunden: $2',
	'mwe-timedtext-request-subs' => 'Untertitelung erbitten',
	'mwe-timedtext-no-subs' => 'Es sind keine Untertitel verfügbar',
	'mwe-timedtext-request-subs-desc' => 'Bitte zur Untertitelung dieses Videos hinzufügen',
	'mwe-timedtext-request-subs-done' => 'Bitte zur Untertitelung wurde hinzugefügt. [$1 Alle Bitten zur Untertitelung ansehen]',
	'mwe-timedtext-request-subs-fail' => 'Bitte zur Untertitelung konnte nicht hinzugefügt werden. Angemeldet?',
	'mwe-timedtext-request-already-done' => 'Eine Bitte zur Untertitelung dieses Videos liegt bereits vor. [$1 Alle Bitten zur Untertitelung ansehen]',
);

/** German (formal address) (Deutsch (Sie-Form)‎)
 * @author Kghbln
 */
$messages['de-formal'] = array(
	'mwe-timedtext-upload-text-desc-help-browse' => 'Durchsuchen Sie Ihren lokalen Computer nach der SRT-Datei, die Sie hochladen möchten',
	'mwe-timedtext-upload-text-desc-help-select' => 'Wählen Sie die Sprache der Datei',
	'mwe-timedtext-upload-text-desc-help-review' => 'Sehen Sie den Text durch und bearbeiten Sie ihn gegebenenfalls, bevor Sie ihn mit einem Klick auf Hochladen hinzufügen',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 * @author Mirzali
 */
$messages['diq'] = array(
	'mwe-timedtext-stage-sync' => 'Sync',
	'mwe-timedtext-back-btn' => 'Peyser',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'mwe-timedtext-editor' => 'Editor za synchronizěrowany tekst',
	'mwe-timedtext-stage-transcribe' => 'Pśepisaś',
	'mwe-timedtext-stage-sync' => 'Synchronizěrowaś',
	'mwe-timedtext-stage-translate' => 'Pśełožyś',
	'mwe-timedtext-stage-upload' => 'Z lokalneje dataje nagraś',
	'mwe-timedtext-select-language' => 'Rěc wubraś',
	'mwe-timedtext-file-language' => 'Rěc dataje pódtitela',
	'mwe-timedtext-upload-text' => 'Tekstowu dataju nagraś',
	'mwe-timedtext-uploading-text' => 'Tekstowa dataja se nagrawa',
	'mwe-timedtext-upload-text-desc-title' => 'Tekstowu dataju nagraś',
	'mwe-timedtext-upload-text-desc-help' => 'Pówjerch za nagrawanje tekstowych datajow akceptěrujo .srt-dataje',
	'mwe-timedtext-upload-text-desc-help-browse' => 'Pśepytaj swój lokalny kompjuter za .srt-dataju, kótaruž coš nagraś',
	'mwe-timedtext-upload-text-desc-help-select' => 'Rěc dataje wubraś',
	'mwe-timedtext-upload-text-desc-help-review' => 'Pśeglědaj abo wobźěłaj tekstowe wopśimjeśe a klikni pótom na Nagraś, aby tekst pśidał',
	'mwe-timedtext-upload-text-preview' => 'Tekst pśeglědaś',
	'mwe-timedtext-upload-text-success' => 'Nagraśe synchronizowanego teksta jo wuspěšne było',
	'mwe-timedtext-upload-text-done' => 'Nagraśe skóńcone',
	'mwe-timedtext-upload-text-fail-desc' => 'Nagraśe jo se njeraźiło',
	'mwe-timedtext-upload-text-fail-title' => 'Nagraśe jo se njeraźiło',
	'mwe-timedtext-upload-text-another' => 'Dalšnu nagraś',
	'mwe-timedtext-upload-text-done-uploading' => 'Nagraśe skóńcone',
	'mwe-timedtext-back-btn' => 'Slědk',
	'mwe-timedtext-choose-text' => 'Tekst wubraś',
	'mwe-timedtext-upload-timed-text' => 'Pódtitele pśidaś',
	'mwe-timedtext-loading-text-edit' => 'Editor za synchronizěrowany tekst se startujo',
	'mwe-timedtext-search' => 'Klip pytaś',
	'mwe-timedtext-layout' => 'Wusměrjenje',
	'mwe-timedtext-layout-ontop' => 'Nad wideo',
	'mwe-timedtext-layout-below' => 'Pód wideo',
	'mwe-timedtext-layout-off' => 'Pódtitele schowaś',
	'mwe-timedtext-loading-text' => 'Tekst se zacytujo...',
	'mwe-timedtext-textcat-cc' => 'Wopisanja',
	'mwe-timedtext-textcat-sub' => 'Pódtitele',
	'mwe-timedtext-textcat-tad' => 'Awdiowopisanje',
	'mwe-timedtext-textcat-ktv' => 'Karaoke',
	'mwe-timedtext-textcat-tik' => 'Běžecy tekst',
	'mwe-timedtext-textcat-ar' => 'Aktiwne regiony',
	'mwe-timedtext-textcat-nb' => 'Anotacija',
	'mwe-timedtext-textcat-meta' => 'Synchronizěrowane metadaty',
	'mwe-timedtext-textcat-trx' => 'Pśepisaś',
	'mwe-timedtext-textcat-lrc' => 'Spiwny tekst',
	'mwe-timedtext-textcat-lin' => 'Rěcywědne wopisanje',
	'mwe-timedtext-textcat-cue' => 'Zastupne dypki',
	'mwe-timedtext-language-subtitles-for-clip' => '$1 {{PLURAL:$1|pódtitel|pódtitela|pódtitele|oódtitelow}} za klip: $2',
	'mwe-timedtext-language-no-subtitles-for-clip' => 'Žedne pódtitele $1 su se za klip namakali: $2',
	'mwe-timedtext-request-subs' => 'Transkripciju pominaś',
	'mwe-timedtext-no-subs' => 'Žedne pódtitele k dispoziciji',
	'mwe-timedtext-request-subs-desc' => 'Póžedanje na transkripciju toś teje wideojoweje dataje pśidaś',
	'mwe-timedtext-request-subs-done' => 'Póžedanje na transkripciju pśidane. [$1 Glědaj wšykne póžedanja na transkripciju]',
	'mwe-timedtext-request-subs-fail' => 'Pśidawanje póžedanja na transkripciju jo se njeraźiło. Sy se pśizjawił?',
	'mwe-timedtext-request-already-done' => 'Póžedanje na transkripcija toś togo widea jo se južo stajiło. [$1 Glědaj wšykne póžedanja na transkripciju]',
);

/** Greek (Ελληνικά)
 * @author Geraki
 */
$messages['el'] = array(
	'mwe-timedtext-editor' => 'Επεξεργαστής χρονισμένου κειμένου',
	'mwe-timedtext-stage-transcribe' => 'Μεταγραφή',
	'mwe-timedtext-stage-sync' => 'Συγχρονισμός',
	'mwe-timedtext-stage-translate' => 'Μετάφραση',
	'mwe-timedtext-stage-upload' => 'Φορτώστε από τοπικό αρχείο',
	'mwe-timedtext-select-language' => 'Επιλογή γλώσσας',
	'mwe-timedtext-file-language' => 'Όνομα αρχείου γλώσσας',
	'mwe-timedtext-upload-text' => 'Φορτώστε αρχείο κειμένου',
	'mwe-timedtext-uploading-text' => 'Μεταφόρτωση αρχείου κειμένου',
	'mwe-timedtext-upload-text-desc-title' => 'Φορτώστε αρχείο κειμένου',
	'mwe-timedtext-upload-text-desc-help' => 'Η διεπαφή μεταφόρτωσης αρχείου κειμένου αποδέχεται .srt αρχεία',
	'mwe-timedtext-upload-text-desc-help-browse' => 'Περιήγηση στον τοπικό υπολογιστή σας για το αρχείο .srt που θέλετε να ανεβάσετε',
	'mwe-timedtext-upload-text-desc-help-select' => 'Επιλέξτε τη γλώσσα του αρχείου',
	'mwe-timedtext-upload-text-desc-help-review' => 'Επανεξεταστε / επεξεργαστείτε το περιεχόμενο του κειμένου και στη συνέχεια πατήστε επιφόρτωση για να προσθέσετε το κείμενο',
	'mwe-timedtext-upload-text-preview' => 'Επανεξέταση κείμενου',
	'mwe-timedtext-upload-text-success' => 'Το ανέβασμα του χρονισμένου κειμένου ολοκληρώθηκε με επιτυχία',
	'mwe-timedtext-upload-text-done' => 'Η επιφόρτωση έγινε',
	'mwe-timedtext-upload-text-fail-desc' => 'Η επιφόρτωση ήταν ανεπιτυχής',
	'mwe-timedtext-upload-text-fail-title' => 'Η επιφόρτωση απέτυχε',
	'mwe-timedtext-upload-text-another' => 'Ανεβάστε ένα άλλο',
	'mwe-timedtext-upload-text-done-uploading' => 'Έγινε επιφόρτωση',
	'mwe-timedtext-back-btn' => 'Επιστροφή',
	'mwe-timedtext-choose-text' => 'Επιλέξτε το κείμενο',
	'mwe-timedtext-loading-text-edit' => 'Φόρτωση επεξεργαστή χρονισμένου κειμένου',
	'mwe-timedtext-search' => 'Αναζήτηση βίντεο',
	'mwe-timedtext-layout' => 'Διάταξη',
	'mwe-timedtext-layout-ontop' => 'Στην κορυφή του βίντεο',
	'mwe-timedtext-layout-below' => 'Κάτω από το βίντεο',
	'mwe-timedtext-layout-off' => 'Απόκρυψη υπότιτλων',
	'mwe-timedtext-loading-text' => 'Φόρτωση κείμενου...',
	'mwe-timedtext-textcat-cc' => 'Λεζάντες',
	'mwe-timedtext-textcat-sub' => 'Υπότιτλοι',
	'mwe-timedtext-textcat-tad' => 'Ακουστική περιγραφή',
	'mwe-timedtext-textcat-ktv' => 'Καραόκε',
	'mwe-timedtext-textcat-tik' => 'Κυλιόμενο κείμενο',
	'mwe-timedtext-textcat-ar' => 'Ενεργές περιοχές',
	'mwe-timedtext-textcat-nb' => 'Σχόλιο',
	'mwe-timedtext-textcat-meta' => 'Χρονισμένα μεταδεδομένα',
	'mwe-timedtext-textcat-trx' => 'Μεταγραφή',
	'mwe-timedtext-textcat-lrc' => 'Στίχοι',
	'mwe-timedtext-textcat-lin' => 'Γλωσσολογική σύνταξη',
	'mwe-timedtext-textcat-cue' => 'Cue points',
	'mwe-timedtext-language-subtitles-for-clip' => '$1 υπότιτλοι για το βίντεο: $2',
	'mwe-timedtext-language-no-subtitles-for-clip' => 'Δεν βρέθηκαν υπότιτλοι $1 για το βίντεο: $2',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 */
$messages['eo'] = array(
	'mwe-timedtext-upload-text-fail-title' => 'Alŝutado malsukcesis',
	'mwe-timedtext-upload-text-another' => 'Alŝuti alian',
	'mwe-timedtext-upload-text-done-uploading' => 'Finiĝis alŝutado',
);

/** Spanish (español)
 * @author Armando-Martin
 * @author Crazymadlover
 * @author Locos epraix
 * @author Pertile
 * @author Translationista
 */
$messages['es'] = array(
	'mwe-timedtext-editor' => 'Editor de texto temporizado',
	'mwe-timedtext-stage-transcribe' => 'Transcribir',
	'mwe-timedtext-stage-sync' => 'Sincronizar',
	'mwe-timedtext-stage-translate' => 'Traducir',
	'mwe-timedtext-stage-upload' => 'Subir desde un archivo local',
	'mwe-timedtext-select-language' => 'Seleccionar idioma',
	'mwe-timedtext-file-language' => 'Idioma del archivo de subtítulo',
	'mwe-timedtext-upload-text' => 'Subir archivo de texto',
	'mwe-timedtext-uploading-text' => 'Subiendo archivo de texto',
	'mwe-timedtext-upload-text-desc-title' => 'Subir un archivo de texto',
	'mwe-timedtext-upload-text-desc-help' => 'La interfaz de carga de archivo de texto acepta archivos .srt',
	'mwe-timedtext-upload-text-desc-help-browse' => 'Examine su computadora local para encontrar el archivo .srt que desea subir',
	'mwe-timedtext-upload-text-desc-help-select' => 'Seleccione el idioma del archivo',
	'mwe-timedtext-upload-text-desc-help-review' => 'Revisa o edita el contenido del texto y luego haz clic en "cargar" para añadirlo',
	'mwe-timedtext-upload-text-preview' => 'Revisar texto',
	'mwe-timedtext-upload-text-success' => 'La carga del texto sincronizado se ha realizado con éxito',
	'mwe-timedtext-upload-text-done' => 'Carga hecha',
	'mwe-timedtext-upload-text-fail-desc' => 'La carga no fue exitosa',
	'mwe-timedtext-upload-text-fail-title' => 'La carga falló',
	'mwe-timedtext-upload-text-another' => 'Subir otro',
	'mwe-timedtext-upload-text-done-uploading' => 'Carga finalizada',
	'mwe-timedtext-back-btn' => 'Atrás',
	'mwe-timedtext-choose-text' => 'Escoger texto',
	'mwe-timedtext-upload-timed-text' => 'Añadir subtítulos',
	'mwe-timedtext-loading-text-edit' => 'Cargando el editor de texto sincronizado',
	'mwe-timedtext-search' => 'Buscar clip',
	'mwe-timedtext-layout' => 'Composición:',
	'mwe-timedtext-layout-ontop' => 'En la parte superior del vídeo',
	'mwe-timedtext-layout-below' => 'Debajo del vídeo',
	'mwe-timedtext-layout-off' => 'Ocultar subtítulos',
	'mwe-timedtext-loading-text' => 'Cargando texto ...',
	'mwe-timedtext-textcat-cc' => 'Leyendas',
	'mwe-timedtext-textcat-sub' => 'Subtítulos',
	'mwe-timedtext-textcat-tad' => 'Descripción de audio',
	'mwe-timedtext-textcat-ktv' => 'Karaoke',
	'mwe-timedtext-textcat-tik' => 'Texto desplazable',
	'mwe-timedtext-textcat-ar' => 'Regiones activas',
	'mwe-timedtext-textcat-nb' => 'Anotación',
	'mwe-timedtext-textcat-meta' => 'Metadatos sincronizados',
	'mwe-timedtext-textcat-trx' => 'Transcribir',
	'mwe-timedtext-textcat-lrc' => 'Letra',
	'mwe-timedtext-textcat-lin' => 'Marcador lingüístico',
	'mwe-timedtext-textcat-cue' => 'Puntos de referencia',
	'mwe-timedtext-language-subtitles-for-clip' => '$1 subtítulos para el clip: $2',
	'mwe-timedtext-language-no-subtitles-for-clip' => 'No se ha encontrado subtítulos $1 para el clip: $2',
	'mwe-timedtext-request-subs' => 'Solicitar la transcripción',
	'mwe-timedtext-no-subs' => 'No hay pistas de texto disponibles',
	'mwe-timedtext-request-subs-desc' => 'Añadir una solicitud de transcripción de este archivo de vídeo',
	'mwe-timedtext-request-subs-done' => 'Solicitud de transcripción añadida. [$1 Ver todas las solicitudes de transcripción]',
	'mwe-timedtext-request-subs-fail' => 'Error al añadir la solicitud de transcripción. ¿Ha iniciado sesión?',
	'mwe-timedtext-request-already-done' => 'Ya se solicitó la transcripción de este vídeo. [$1 Ver todas las solicitudes de transcripción]',
);

/** Estonian (eesti)
 * @author Avjoska
 */
$messages['et'] = array(
	'mwe-timedtext-textcat-ktv' => 'Karaoke',
	'mwe-timedtext-textcat-lrc' => 'Laulusõnad',
);

/** Basque (euskara)
 * @author පසිඳු කාවින්ද
 */
$messages['eu'] = array(
	'mwe-timedtext-back-btn' => 'Atzera',
);

/** Persian (فارسی)
 * @author پاناروما
 */
$messages['fa'] = array(
	'mwe-timedtext-stage-transcribe' => 'رونویسی',
	'mwe-timedtext-stage-sync' => 'همگام سازی',
	'mwe-timedtext-stage-translate' => 'ترجمه',
	'mwe-timedtext-stage-upload' => 'بارگذاری از پروندۀاصلی',
	'mwe-timedtext-select-language' => 'انتخاب زبان',
	'mwe-timedtext-upload-text' => 'بارگذاری پروندۀ متن',
	'mwe-timedtext-upload-text-desc-help-select' => 'انتخاب زبان پرونده',
	'mwe-timedtext-upload-text-preview' => 'بررسی متن',
	'mwe-timedtext-upload-text-done' => 'بارگذاری انجام شد',
	'mwe-timedtext-upload-text-fail-desc' => 'بارگذاری ناموفق بود',
	'mwe-timedtext-upload-text-another' => 'بارگذاری دیگر',
	'mwe-timedtext-upload-text-done-uploading' => 'بارگذاری انجام شد',
	'mwe-timedtext-back-btn' => 'بازگشت',
	'mwe-timedtext-choose-text' => 'انتخاب متن',
	'mwe-timedtext-upload-timed-text' => 'اضافه کردن زیرنویس',
	'mwe-timedtext-layout' => 'چیدمان',
	'mwe-timedtext-layout-off' => 'پنهان‌کردن زیرنویس',
	'mwe-timedtext-loading-text' => 'در حال بارگیری متن...',
	'mwe-timedtext-textcat-cc' => 'عناوین:',
	'mwe-timedtext-textcat-sub' => 'زیرنویس',
	'mwe-timedtext-textcat-lrc' => 'متن ترانه‌ها',
);

/** Finnish (suomi)
 * @author Silvonen
 */
$messages['fi'] = array(
	'mwe-timedtext-stage-translate' => 'Käännä',
	'mwe-timedtext-select-language' => 'Valitse kieli',
	'mwe-timedtext-back-btn' => 'Takaisin',
	'mwe-timedtext-textcat-cc' => 'Kuvatekstit',
	'mwe-timedtext-textcat-ktv' => 'Karaoke',
);

/** French (français)
 * @author IAlex
 * @author Peter17
 * @author Tititou36
 * @author Verdy p
 */
$messages['fr'] = array(
	'mwe-timedtext-editor' => 'Éditeur de texte synchronisé',
	'mwe-timedtext-stage-transcribe' => 'Transcrire',
	'mwe-timedtext-stage-sync' => 'Synchroniser',
	'mwe-timedtext-stage-translate' => 'Traduire',
	'mwe-timedtext-stage-upload' => 'Téléverser un fichier local',
	'mwe-timedtext-select-language' => 'Sélectionner la langue',
	'mwe-timedtext-file-language' => 'Langue du fichier de sous-titres',
	'mwe-timedtext-upload-text' => 'Téléverser un fichier texte',
	'mwe-timedtext-uploading-text' => 'Téléversement du fichier texte',
	'mwe-timedtext-upload-text-desc-title' => 'Téléverser un fichier texte',
	'mwe-timedtext-upload-text-desc-help' => "L'interface de téléversement de fichiers texte accepte les fichiers .srt",
	'mwe-timedtext-upload-text-desc-help-browse' => 'Parcourez votre ordinateur local pour trouver le fichier .srt que vous souhaitez téléverser',
	'mwe-timedtext-upload-text-desc-help-select' => 'Sélectionner la langue du fichier',
	'mwe-timedtext-upload-text-desc-help-review' => 'Vérifiez / modifiez le contenu du texte et appuyez ensuite sur téléverser pour ajouter le texte',
	'mwe-timedtext-upload-text-preview' => 'Vérifier le texte',
	'mwe-timedtext-upload-text-success' => 'Téléversement du texte synchronisé effectué avec succès',
	'mwe-timedtext-upload-text-done' => 'Téléversement terminé',
	'mwe-timedtext-upload-text-fail-desc' => 'Le téléversement a échoué',
	'mwe-timedtext-upload-text-fail-title' => 'Échec du téléversement',
	'mwe-timedtext-upload-text-another' => 'Téléverser un autre',
	'mwe-timedtext-upload-text-done-uploading' => 'Téléversement effectué',
	'mwe-timedtext-back-btn' => 'Arrière',
	'mwe-timedtext-choose-text' => 'Choisissez le texte',
	'mwe-timedtext-upload-timed-text' => 'Ajouter des sous-titres',
	'mwe-timedtext-loading-text-edit' => "Chargement de l'éditeur de texte synchronisé",
	'mwe-timedtext-search' => 'Recherche un clip',
	'mwe-timedtext-layout' => 'Disposition',
	'mwe-timedtext-layout-ontop' => 'En haut de la vidéo',
	'mwe-timedtext-layout-below' => 'En dessous de la vidéo',
	'mwe-timedtext-layout-off' => 'Masquer les sous-titres',
	'mwe-timedtext-loading-text' => 'Chargement du texte ...',
	'mwe-timedtext-textcat-cc' => 'Légendes',
	'mwe-timedtext-textcat-sub' => 'Sous-titres',
	'mwe-timedtext-textcat-tad' => 'Description audio',
	'mwe-timedtext-textcat-ktv' => 'Karaoké',
	'mwe-timedtext-textcat-tik' => "Barre d'informations",
	'mwe-timedtext-textcat-ar' => 'Régions actives',
	'mwe-timedtext-textcat-nb' => 'Annotation',
	'mwe-timedtext-textcat-meta' => 'métadonnées synchronisées',
	'mwe-timedtext-textcat-trx' => 'Transcription',
	'mwe-timedtext-textcat-lrc' => 'Paroles',
	'mwe-timedtext-textcat-lin' => 'Balisage linguistique',
	'mwe-timedtext-textcat-cue' => 'Points de repère',
	'mwe-timedtext-language-subtitles-for-clip' => '$1 sous-titres pour clip : $2',
	'mwe-timedtext-language-no-subtitles-for-clip' => "Aucun sous-titre $1 n'a été trouvé pour le clip : $2",
	'mwe-timedtext-request-subs' => 'Demande de transcription',
	'mwe-timedtext-no-subs' => 'Aucun texte de piste disponible',
	'mwe-timedtext-request-subs-desc' => 'Ajouter une demande de transcription de ce fichier vidéo',
	'mwe-timedtext-request-subs-done' => 'Demande de transcription ajoutée. [$1 Voir toutes demandes de transcription]',
	'mwe-timedtext-request-subs-fail' => "Impossible d'ajouter la demande de transcription. Êtes-vous connecté ?",
	'mwe-timedtext-request-already-done' => 'Une transcription de cette vidéo a déjà été demandée. [$1 Voir toutes les demandes de transcription]',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'mwe-timedtext-editor' => 'Èditor de tèxto sincronisâ',
	'mwe-timedtext-stage-transcribe' => 'Transcrire',
	'mwe-timedtext-stage-sync' => 'Sincronisar',
	'mwe-timedtext-stage-translate' => 'Traduire',
	'mwe-timedtext-stage-upload' => 'Tèlèchargiér un fichiér local',
	'mwe-timedtext-select-language' => 'Chouèsir la lengoua',
	'mwe-timedtext-file-language' => 'Lengoua du fichiér de sot-titros',
	'mwe-timedtext-upload-text' => 'Tèlèchargiér un fichiér tèxto',
	'mwe-timedtext-uploading-text' => 'Tèlèchargement du fichiér tèxto',
	'mwe-timedtext-upload-text-desc-title' => 'Tèlèchargiér un fichiér tèxto',
	'mwe-timedtext-upload-text-desc-help' => 'L’entèrface de tèlèchargement de fichiérs tèxto accèpte los fichiérs .srt',
	'mwe-timedtext-upload-text-desc-help-browse' => 'Parcoréd voutron ordenator local por trovar lo fichiér .srt que vos souhètâd tèlèchargiér',
	'mwe-timedtext-upload-text-desc-help-select' => 'Chouèsir la lengoua du fichiér',
	'mwe-timedtext-upload-text-desc-help-review' => 'Revêde / changiéd lo contegnu du tèxto et pués apoyéd aprés dessus tèlèchargiér por apondre lo tèxto',
	'mwe-timedtext-upload-text-preview' => 'Revêre lo tèxto',
	'mwe-timedtext-upload-text-success' => 'Tèlèchargement du tèxto sincronisâ fêt avouéc reusséta',
	'mwe-timedtext-upload-text-done' => 'Tèlèchargement chavonâ',
	'mwe-timedtext-upload-text-fail-desc' => 'Lo tèlèchargement at pas reussi',
	'mwe-timedtext-upload-text-fail-title' => 'Falyita du tèlèchargement',
	'mwe-timedtext-upload-text-another' => 'Tèlèchargiér un ôtro',
	'mwe-timedtext-upload-text-done-uploading' => 'Tèlèchargement fêt',
	'mwe-timedtext-back-btn' => 'Tornar',
	'mwe-timedtext-choose-text' => 'Chouèsésséd lo tèxto',
	'mwe-timedtext-upload-timed-text' => 'Apondre des sot-titros',
	'mwe-timedtext-loading-text-edit' => 'Chargement de l’èditor de tèxto sincronisâ',
	'mwe-timedtext-search' => 'Rechèrche un clipe',
	'mwe-timedtext-layout' => 'Misa en pâge',
	'mwe-timedtext-layout-ontop' => 'D’amont la vidèô',
	'mwe-timedtext-layout-below' => 'En-desot de la vidèô',
	'mwe-timedtext-layout-off' => 'Cachiér los sot-titros',
	'mwe-timedtext-loading-text' => 'Chargement du tèxto ...',
	'mwe-timedtext-textcat-cc' => 'Lègendes',
	'mwe-timedtext-textcat-sub' => 'Sot-titros',
	'mwe-timedtext-textcat-tad' => 'Dèscripcion ôdiô',
	'mwe-timedtext-textcat-ktv' => 'Caraoquè',
	'mwe-timedtext-textcat-tik' => 'Bârra d’enformacions',
	'mwe-timedtext-textcat-ar' => 'Règ·ions actives',
	'mwe-timedtext-textcat-nb' => 'Nota',
	'mwe-timedtext-textcat-meta' => 'Mètabalyês sincronisâs',
	'mwe-timedtext-textcat-trx' => 'Transcripcion',
	'mwe-timedtext-textcat-lrc' => 'Paroles',
	'mwe-timedtext-textcat-lin' => 'Balisâjo lengouistico',
	'mwe-timedtext-textcat-cue' => 'Pouents de repèro',
	'mwe-timedtext-language-subtitles-for-clip' => '$1 sot-titros por clipe : $2',
	'mwe-timedtext-language-no-subtitles-for-clip' => 'Nion sot-titro $1 at étâ trovâ por lo clipe : $2',
	'mwe-timedtext-request-subs' => 'Demandar la transcripcion',
	'mwe-timedtext-no-subs' => 'Gins de pista de tèxto disponibla',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'mwe-timedtext-editor' => 'Editor de textos sincronizados',
	'mwe-timedtext-stage-transcribe' => 'Transcribir',
	'mwe-timedtext-stage-sync' => 'Sincronizar',
	'mwe-timedtext-stage-translate' => 'Traducir',
	'mwe-timedtext-stage-upload' => 'Cargar un ficheiro local',
	'mwe-timedtext-select-language' => 'Seleccionar a lingua',
	'mwe-timedtext-file-language' => 'Lingua do ficheiro de subtítulos',
	'mwe-timedtext-upload-text' => 'Cargar un ficheiro de texto',
	'mwe-timedtext-uploading-text' => 'Cargando o ficheiro de texto',
	'mwe-timedtext-upload-text-desc-title' => 'Cargar un ficheiro de texto',
	'mwe-timedtext-upload-text-desc-help' => 'A interface de carga de ficheiros de texto admite ficheiros .srt',
	'mwe-timedtext-upload-text-desc-help-browse' => 'Buscar no seu ordenador o ficheiro .srt que quere cargar',
	'mwe-timedtext-upload-text-desc-help-select' => 'Seleccionar a lingua do ficheiro',
	'mwe-timedtext-upload-text-desc-help-review' => 'Revise ou edite os contidos e logo prema en cargar para engadir o texto',
	'mwe-timedtext-upload-text-preview' => 'Revisar o texto',
	'mwe-timedtext-upload-text-success' => 'Cargouse correctamente o texto sincronizado',
	'mwe-timedtext-upload-text-done' => 'Carga completada',
	'mwe-timedtext-upload-text-fail-desc' => 'A carga non se completou correctamente',
	'mwe-timedtext-upload-text-fail-title' => 'Houbo un erro durante a carga',
	'mwe-timedtext-upload-text-another' => 'Cargar outro',
	'mwe-timedtext-upload-text-done-uploading' => 'Non cargar máis',
	'mwe-timedtext-back-btn' => 'Volver',
	'mwe-timedtext-choose-text' => 'Escolla o texto',
	'mwe-timedtext-upload-timed-text' => 'Engadir subtítulos',
	'mwe-timedtext-loading-text-edit' => 'Cargando o editor de texto sincronizado',
	'mwe-timedtext-search' => 'Buscar un vídeo',
	'mwe-timedtext-layout' => 'Disposición',
	'mwe-timedtext-layout-ontop' => 'Na parte superior do vídeo',
	'mwe-timedtext-layout-below' => 'Na parte inferior do vídeo',
	'mwe-timedtext-layout-off' => 'Agochar os subtítulos',
	'mwe-timedtext-loading-text' => 'Cargando o texto...',
	'mwe-timedtext-textcat-cc' => 'Pés de foto',
	'mwe-timedtext-textcat-sub' => 'Subtítulos',
	'mwe-timedtext-textcat-tad' => 'Descrición do son',
	'mwe-timedtext-textcat-ktv' => 'Karaoke',
	'mwe-timedtext-textcat-tik' => 'Barra de información',
	'mwe-timedtext-textcat-ar' => 'Rexións activas',
	'mwe-timedtext-textcat-nb' => 'Anotación',
	'mwe-timedtext-textcat-meta' => 'Metadatos sincronizados',
	'mwe-timedtext-textcat-trx' => 'Transcrición',
	'mwe-timedtext-textcat-lrc' => 'Letra',
	'mwe-timedtext-textcat-lin' => 'Formato lingüístico',
	'mwe-timedtext-textcat-cue' => 'Puntos de sinal',
	'mwe-timedtext-language-subtitles-for-clip' => 'Subtítulos en $1 para o vídeo: $2',
	'mwe-timedtext-language-no-subtitles-for-clip' => 'Non se atoparon os subtítulos en $1 para o vídeo: $2',
	'mwe-timedtext-request-subs' => 'Solicitar a transcrición',
	'mwe-timedtext-no-subs' => 'Non hai pistas de texto dispoñibles',
	'mwe-timedtext-request-subs-desc' => 'Engadir unha solicitude de transcrición deste ficheiro de vídeo',
	'mwe-timedtext-request-subs-done' => 'Solicitude de transcrición engadida. [$1 Ollar todas as solicitudes]',
	'mwe-timedtext-request-subs-fail' => 'Erro ao engadir a solicitude de transcrición. Accedeu ao sistema?',
	'mwe-timedtext-request-already-done' => 'Xa se solicitou a transcrición deste vídeo. [$1 Ollar todas as solicitudes]',
);

/** Swiss German (Alemannisch)
 * @author Als-Chlämens
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'mwe-timedtext-editor' => 'Timed Text-Editor',
	'mwe-timedtext-stage-transcribe' => 'Abschrift mache',
	'mwe-timedtext-stage-sync' => 'Synchronisiere',
	'mwe-timedtext-stage-translate' => 'Ibersetze',
	'mwe-timedtext-stage-upload' => 'Vun ere lokale Datei uffelade',
	'mwe-timedtext-select-language' => 'Sproch wehle',
	'mwe-timedtext-file-language' => 'Sproch vu dr Untertitel',
	'mwe-timedtext-upload-text' => 'Textdatei uffelade',
	'mwe-timedtext-uploading-text' => 'Am Uffelade vun ere Textdatei',
	'mwe-timedtext-upload-text-desc-title' => 'E Textdatei uffelade',
	'mwe-timedtext-upload-text-desc-help' => 'S Interface zum Ufffelade vu Textdateie akzeptiert SRT-Dateie',
	'mwe-timedtext-upload-text-desc-help-browse' => 'Dursuech Dyy lokale Computer no dr SRT-Datei, wu du wettsch uffelade',
	'mwe-timedtext-upload-text-desc-help-select' => 'D Sproch vu dr Datei wehle',
	'mwe-timedtext-upload-text-desc-help-review' => 'Tue dr Textinhalt iberpriefe / bearbeite un derno druck uf Uffelade go ne zuefiege',
	'mwe-timedtext-upload-text-preview' => 'Text iberpriefe',
	'mwe-timedtext-upload-text-success' => 'S Uffelade vum Text isch erfolgryych gsi',
	'mwe-timedtext-upload-text-done' => 'Fertig mit Uffelade',
	'mwe-timedtext-upload-text-fail-desc' => 'S Uffelade isch nit erfolgryych gsi',
	'mwe-timedtext-upload-text-fail-title' => 'Uffelade fählgschlaa',
	'mwe-timedtext-upload-text-another' => 'Uffelade vun ere wytere Textdatei',
	'mwe-timedtext-upload-text-done-uploading' => 'Fertig mit Uffelade',
	'mwe-timedtext-back-btn' => 'Zruck',
	'mwe-timedtext-choose-text' => 'Text uuswehle',
	'mwe-timedtext-upload-timed-text' => 'Untertitel uffelade', # Fuzzy
	'mwe-timedtext-loading-text-edit' => 'Am Lade vum Ächtzyt-Text-Editor',
	'mwe-timedtext-search' => 'Videoclip sueche',
	'mwe-timedtext-layout' => 'Uusrichtig',
	'mwe-timedtext-layout-ontop' => 'Iber em Videoclip',
	'mwe-timedtext-layout-below' => 'Unter em Videoclip',
	'mwe-timedtext-layout-off' => 'Untertitel uusblände',
	'mwe-timedtext-loading-text' => 'Am Lade vum Text ...',
	'mwe-timedtext-textcat-cc' => 'Bschryybige',
	'mwe-timedtext-textcat-sub' => 'Untertitel',
	'mwe-timedtext-textcat-tad' => 'Audio-Bschryybig',
	'mwe-timedtext-textcat-ktv' => 'Karaoke',
	'mwe-timedtext-textcat-tik' => 'Text-Ticker',
	'mwe-timedtext-textcat-ar' => 'Aktivi Regione',
	'mwe-timedtext-textcat-nb' => 'Aamerkig',
	'mwe-timedtext-textcat-meta' => 'Ächtzyt-Metadate',
	'mwe-timedtext-textcat-trx' => 'Abschrift',
	'mwe-timedtext-textcat-lrc' => 'Liedtext',
	'mwe-timedtext-textcat-lin' => 'Sprochwisseschaftligi Bschryybig',
	'mwe-timedtext-textcat-cue' => 'Cue-Pinkt',
	'mwe-timedtext-language-subtitles-for-clip' => '$1 Untertitel gfunde fir dr Videoclip: $2',
	'mwe-timedtext-language-no-subtitles-for-clip' => 'Kei $1 Untertitel gfunde fir dr Videoclip: $2',
	'mwe-timedtext-request-subs' => 'Untertitel aafordre',
	'mwe-timedtext-no-subs' => 'Untertitel sin nit verfiegbar',
	'mwe-timedtext-request-subs-desc' => 'E Aafroog stelle, dass für des Video Untertitel gmacht werde',
	'mwe-timedtext-request-subs-done' => 'D Aafroog für e Untertitelig isch dezuegfiegt worde. [$1 Alli Aafrooge zur Untertitelung aaluege]',
	'mwe-timedtext-request-subs-fail' => 'Die Aafroog für e Untertitelig het nit chönne dezuegfiegt worde. Bisch aagmolde?',
	'mwe-timedtext-request-already-done' => 'Es git scho e Aafroog, dass de Video untertitelt wird. [$1 Alli Aafrooge zur Untertitelig aaluege]',
);

/** Hebrew (עברית)
 * @author Amire80
 * @author YaronSh
 */
$messages['he'] = array(
	'mwe-timedtext-editor' => 'עורך טקסט מתוזמן',
	'mwe-timedtext-stage-transcribe' => 'לתמלל',
	'mwe-timedtext-stage-sync' => 'סנכרון',
	'mwe-timedtext-stage-translate' => 'תרגום',
	'mwe-timedtext-stage-upload' => 'העלאה מקובץ מקומי',
	'mwe-timedtext-select-language' => 'בחירת שפה',
	'mwe-timedtext-file-language' => 'שפת קובץ הכתוביות',
	'mwe-timedtext-upload-text' => 'העלאת קובץ טקסט',
	'mwe-timedtext-uploading-text' => 'מתבצעת העלאת קובץ טקסט',
	'mwe-timedtext-upload-text-desc-title' => 'העלאת קובץ טקסט',
	'mwe-timedtext-upload-text-desc-help' => 'ממשק העלאת טקסט מקבל קובצי <span dir="ltr">.srt</span>',
	'mwe-timedtext-upload-text-desc-help-browse' => 'עיון במחשב המקומי שלכם כדי למצוא קובץ <span dir="ltr">.srt</span> להעלאה',
	'mwe-timedtext-upload-text-desc-help-select' => 'בחרו את שפת הקובץ',
	'mwe-timedtext-upload-text-desc-help-review' => 'סקרו או ערכו את הטקסט ואז לחצו "העלאה" כדי להוסיף את הטקסט',
	'mwe-timedtext-upload-text-preview' => 'סקירת טקסט',
	'mwe-timedtext-upload-text-success' => 'העלאת טקסט מתוזמן הצליחה',
	'mwe-timedtext-upload-text-done' => 'ההעלאה הסתיימה',
	'mwe-timedtext-upload-text-fail-desc' => 'ההעלאה נכשלה',
	'mwe-timedtext-upload-text-fail-title' => 'ההעלאה נכשלה',
	'mwe-timedtext-upload-text-another' => 'להעלות עוד',
	'mwe-timedtext-upload-text-done-uploading' => 'ההעלאה הסתיימה',
	'mwe-timedtext-back-btn' => 'חזרה',
	'mwe-timedtext-choose-text' => 'בחירת טקסט',
	'mwe-timedtext-upload-timed-text' => 'הוספת כתוביות',
	'mwe-timedtext-loading-text-edit' => 'טעינת עורך טקסט מתוזמן',
	'mwe-timedtext-search' => 'חיפוש סרטון',
	'mwe-timedtext-layout' => 'פריסה',
	'mwe-timedtext-layout-ontop' => 'על גבי הווידאו',
	'mwe-timedtext-layout-below' => 'מתחת לווידאו',
	'mwe-timedtext-layout-off' => 'הסתרת כתוביות',
	'mwe-timedtext-loading-text' => 'טעינת טקסט...',
	'mwe-timedtext-textcat-cc' => 'כותרות',
	'mwe-timedtext-textcat-sub' => 'כתוביות',
	'mwe-timedtext-textcat-tad' => 'תיאור השמע',
	'mwe-timedtext-textcat-ktv' => 'קריוקי',
	'mwe-timedtext-textcat-tik' => 'שפת השורה הרצה',
	'mwe-timedtext-textcat-ar' => 'אזורים פעילים',
	'mwe-timedtext-textcat-nb' => 'פרשנות',
	'mwe-timedtext-textcat-meta' => 'מטא־מתונים מתוזמנים',
	'mwe-timedtext-textcat-trx' => 'תמליל',
	'mwe-timedtext-textcat-lrc' => 'מילות השיר',
	'mwe-timedtext-textcat-lin' => 'סימון בלשני',
	'mwe-timedtext-textcat-cue' => 'נקודות סימנית',
	'mwe-timedtext-language-subtitles-for-clip' => 'כתוביות ב$1 עבור הסרטון $2',
	'mwe-timedtext-language-no-subtitles-for-clip' => 'לא נמצאו כתוביות ב$1 עבור $2',
	'mwe-timedtext-request-subs' => 'לבקש תמלול',
	'mwe-timedtext-no-subs' => 'אין רצועת תמליל זמינה',
	'mwe-timedtext-request-subs-desc' => 'הוספת בקשה לתמלל את קובץ הווידאו הזה',
	'mwe-timedtext-request-subs-done' => 'נוספה בקשת תמלול. [$1 הצגת כל בקשות התמלול]',
	'mwe-timedtext-request-subs-fail' => 'הוספת בקשת התמלול נכשלה. האם נכנסתם לחשבון?',
	'mwe-timedtext-request-already-done' => 'בקשה לתמלל את הסרט הזה כבר נשלחה. [$1 הצגת כל בקשות התמלול]',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'mwe-timedtext-editor' => 'Editor za synchronizowany tekst',
	'mwe-timedtext-stage-transcribe' => 'Přepisać',
	'mwe-timedtext-stage-sync' => 'Synchronizować',
	'mwe-timedtext-stage-translate' => 'Přełožić',
	'mwe-timedtext-stage-upload' => 'Z lokalneje dataje nahrać',
	'mwe-timedtext-select-language' => 'Rěč wubrać',
	'mwe-timedtext-file-language' => 'Rěč dataje podtitula',
	'mwe-timedtext-upload-text' => 'Tekstowu dataju nahrać',
	'mwe-timedtext-uploading-text' => 'Tekstowa dataja so nahrawa',
	'mwe-timedtext-upload-text-desc-title' => 'Tekstowu dataju nahrać',
	'mwe-timedtext-upload-text-desc-help' => 'Powjerch za nahrawanje tekstowych datajow akceptuje jenož .srt-dataje',
	'mwe-timedtext-upload-text-desc-help-browse' => 'Přepytaj swój lokalny ličak za .srt-dataju, kotruž chceš nahrać',
	'mwe-timedtext-upload-text-desc-help-select' => 'Wubjer rěč dataje',
	'mwe-timedtext-upload-text-desc-help-review' => 'Přepruwuj abo změń tekstowy wobsah a klikń potom na Nahrać, zo by tekst přidał',
	'mwe-timedtext-upload-text-preview' => 'Tekst přepruwować',
	'mwe-timedtext-upload-text-success' => 'Nahraće synchronizowaneho teksta bě wuspěšne',
	'mwe-timedtext-upload-text-done' => 'Nahraće zakónčene',
	'mwe-timedtext-upload-text-fail-desc' => 'Nahraće je so njeporadźiło',
	'mwe-timedtext-upload-text-fail-title' => 'Nahraće je so njeporadźiło',
	'mwe-timedtext-upload-text-another' => 'Druhu dataju nahrać',
	'mwe-timedtext-upload-text-done-uploading' => 'Nahraće skónčene',
	'mwe-timedtext-back-btn' => 'Wróćo',
	'mwe-timedtext-choose-text' => 'Tekst wubrać',
	'mwe-timedtext-upload-timed-text' => 'Podtitule přidać',
	'mwe-timedtext-loading-text-edit' => 'Editor za synchronizowany tekst so startuje',
	'mwe-timedtext-search' => 'Klip pytać',
	'mwe-timedtext-layout' => 'Wusměrjenje',
	'mwe-timedtext-layout-ontop' => 'Nad widejom',
	'mwe-timedtext-layout-below' => 'Pod widejom',
	'mwe-timedtext-layout-off' => 'Podtitule schować',
	'mwe-timedtext-loading-text' => 'Tekst so začituje...',
	'mwe-timedtext-textcat-cc' => 'Nadpisma',
	'mwe-timedtext-textcat-sub' => 'Podtitule',
	'mwe-timedtext-textcat-tad' => 'Awdiowopisanje',
	'mwe-timedtext-textcat-ktv' => 'Karaoke',
	'mwe-timedtext-textcat-tik' => 'Tekstowy běžacy pask',
	'mwe-timedtext-textcat-ar' => 'Aktiwne regiony',
	'mwe-timedtext-textcat-nb' => 'Anotacija',
	'mwe-timedtext-textcat-meta' => 'Synchronizowane metadaty',
	'mwe-timedtext-textcat-trx' => 'Přepis',
	'mwe-timedtext-textcat-lrc' => 'Spěwowy tekst',
	'mwe-timedtext-textcat-lin' => 'Rěčespytne wopisanje',
	'mwe-timedtext-textcat-cue' => 'Zastupne dypki',
	'mwe-timedtext-language-subtitles-for-clip' => '$1 {{PLURAL:$1|podtitul|podtitulej|podtitule|podtitulow}} za klip: $2',
	'mwe-timedtext-language-no-subtitles-for-clip' => 'Žane podtitule $1 za klip namakane: $2',
	'mwe-timedtext-request-subs' => 'Transkripciju požadać',
	'mwe-timedtext-no-subs' => 'Žane podtitule k dispoziciji',
	'mwe-timedtext-request-subs-desc' => 'Požadanje za transkripciju tuteje widejodataje přidać',
	'mwe-timedtext-request-subs-done' => 'Požadanje wo transkripciju přidate. [$1 Hlej wšě požadanja wo transkripciju]',
	'mwe-timedtext-request-subs-fail' => 'Přidawanje požadanje wo transkripciju je so njeporadźiło. Sy so přizjewił?',
	'mwe-timedtext-request-already-done' => 'Transkripcija tutoho wideja je so hižo požadała. [$1 Hlej wšě požadanja wo transkripciju]',
);

/** Hungarian (magyar)
 * @author Dani
 * @author Glanthor Reviol
 */
$messages['hu'] = array(
	'mwe-timedtext-stage-transcribe' => 'Átírás',
	'mwe-timedtext-stage-sync' => 'Szinkronizálás',
	'mwe-timedtext-stage-translate' => 'Fordítás',
	'mwe-timedtext-stage-upload' => 'Helyi fájl feltöltése',
	'mwe-timedtext-select-language' => 'Nyelv kiválasztása',
	'mwe-timedtext-file-language' => 'Feliratfájl nyelve',
	'mwe-timedtext-upload-text' => 'Szövegfájl feltöltése',
	'mwe-timedtext-uploading-text' => 'Szövegfájl feltöltése…',
	'mwe-timedtext-upload-text-desc-title' => 'Egy szövegfájl feltöltése',
	'mwe-timedtext-upload-text-desc-help-browse' => 'Keresd meg a számítógépeden a feltölteni kívánt .srt fájlt',
	'mwe-timedtext-upload-text-desc-help-select' => 'Válassz nyelvet a fájl számára',
	'mwe-timedtext-upload-text-preview' => 'Szöveg ellenőrzése',
	'mwe-timedtext-upload-text-success' => 'Az időzített szöveg feltöltése sikeresen befejeződött',
	'mwe-timedtext-upload-text-done' => 'A feltöltés kész',
	'mwe-timedtext-upload-text-fail-desc' => 'A feltöltés sikertelen volt',
	'mwe-timedtext-upload-text-fail-title' => 'A feltöltéskor hiba történt',
	'mwe-timedtext-upload-text-another' => 'Másik feltöltése',
	'mwe-timedtext-upload-text-done-uploading' => 'A feltöltés befejeződött',
	'mwe-timedtext-back-btn' => 'Vissza',
	'mwe-timedtext-choose-text' => 'Szöveg választása',
	'mwe-timedtext-upload-timed-text' => 'Felirat feltöltése', # Fuzzy
	'mwe-timedtext-loading-text-edit' => 'Időzítettszöveg-szerkesztő betöltése',
	'mwe-timedtext-search' => 'Klip keresése',
	'mwe-timedtext-layout' => 'Elrendezés',
	'mwe-timedtext-layout-ontop' => 'A videó felett',
	'mwe-timedtext-layout-below' => 'A videó alatt',
	'mwe-timedtext-layout-off' => 'Feliratok elrejtése',
	'mwe-timedtext-loading-text' => 'Szöveg betöltése…',
	'mwe-timedtext-textcat-cc' => 'Feliratok',
	'mwe-timedtext-textcat-sub' => 'Felirat',
	'mwe-timedtext-textcat-tad' => 'Hang leírása',
	'mwe-timedtext-textcat-ktv' => 'Karaoke',
	'mwe-timedtext-textcat-ar' => 'Aktív régiók',
	'mwe-timedtext-textcat-nb' => 'Annotáció',
	'mwe-timedtext-textcat-meta' => 'Időzített metaadatok',
	'mwe-timedtext-textcat-trx' => 'Átirat',
	'mwe-timedtext-textcat-lrc' => 'Dalszöveg',
	'mwe-timedtext-textcat-lin' => 'Nyelvi jelölés',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'mwe-timedtext-editor' => 'Editor de subtitulos',
	'mwe-timedtext-stage-transcribe' => 'Transcriber',
	'mwe-timedtext-stage-sync' => 'Sync',
	'mwe-timedtext-stage-translate' => 'Traducer',
	'mwe-timedtext-stage-upload' => 'Incargar ex un file local',
	'mwe-timedtext-select-language' => 'Selige lingua',
	'mwe-timedtext-file-language' => 'Lingua del file de subtitulos',
	'mwe-timedtext-upload-text' => 'Incargar file de texto',
	'mwe-timedtext-uploading-text' => 'Incarga file de texto…',
	'mwe-timedtext-upload-text-desc-title' => 'Incargar un file de texto',
	'mwe-timedtext-upload-text-desc-help' => 'Le interfacie pro incargamento de files de texto accepta le files .srt',
	'mwe-timedtext-upload-text-desc-help-browse' => 'Cerca in tu computator local le file .srt que tu vole incargar',
	'mwe-timedtext-upload-text-desc-help-select' => 'Selige le lingua del file',
	'mwe-timedtext-upload-text-desc-help-review' => 'Revide / modifica le contento del texto e postea preme incargar pro adder le texto',
	'mwe-timedtext-upload-text-preview' => 'Revider texto',
	'mwe-timedtext-upload-text-success' => 'Le incargamento del subtitulos ha succedite',
	'mwe-timedtext-upload-text-done' => 'Incargamento finite',
	'mwe-timedtext-upload-text-fail-desc' => 'Le incargamento non ha succedite',
	'mwe-timedtext-upload-text-fail-title' => 'Incargamento fallite',
	'mwe-timedtext-upload-text-another' => 'Incargar un altere',
	'mwe-timedtext-upload-text-done-uploading' => 'Finite incargar',
	'mwe-timedtext-back-btn' => 'Retornar',
	'mwe-timedtext-choose-text' => 'Selige texto',
	'mwe-timedtext-upload-timed-text' => 'Incargar subtitulos', # Fuzzy
	'mwe-timedtext-loading-text-edit' => 'Carga le editor de subtitulos…',
	'mwe-timedtext-search' => 'Cercar clip',
	'mwe-timedtext-layout' => 'Disposition',
	'mwe-timedtext-layout-ontop' => 'Super le video',
	'mwe-timedtext-layout-below' => 'Sub le video',
	'mwe-timedtext-layout-off' => 'Celar subtitulos',
	'mwe-timedtext-loading-text' => 'Carga texto…',
	'mwe-timedtext-textcat-cc' => 'Subtitulos',
	'mwe-timedtext-textcat-sub' => 'Subtitulos',
	'mwe-timedtext-textcat-tad' => 'Description audio',
	'mwe-timedtext-textcat-ktv' => 'Karaoke',
	'mwe-timedtext-textcat-tik' => 'Barra de information',
	'mwe-timedtext-textcat-ar' => 'Regiones active',
	'mwe-timedtext-textcat-nb' => 'Annotation',
	'mwe-timedtext-textcat-meta' => 'Metadatos de synchronisation',
	'mwe-timedtext-textcat-trx' => 'Transcription',
	'mwe-timedtext-textcat-lrc' => 'Lyricos',
	'mwe-timedtext-textcat-lin' => 'Marcation lingusitic',
	'mwe-timedtext-textcat-cue' => 'Punctos de entrata',
	'mwe-timedtext-language-subtitles-for-clip' => 'Subtitulos in $1 pro le clip: $2',
	'mwe-timedtext-language-no-subtitles-for-clip' => 'Nulle subtitulos in $1 ha essite trovate pro le clip: $2',
	'mwe-timedtext-request-subs' => 'Requestar transcription',
	'mwe-timedtext-no-subs' => 'Subtitulos non disponibile',
	'mwe-timedtext-request-subs-desc' => 'Adder un requesta que iste file video sia transcribite',
	'mwe-timedtext-request-subs-done' => 'Requesta de transcription addite. [$1 Vide tote le requestas de transcriber]',
	'mwe-timedtext-request-subs-fail' => 'Addition del requesta de transcription fallite. Ha tu aperite session?',
	'mwe-timedtext-request-already-done' => 'Un transcription de iste video ha jam essite requestate. [$1 Vide tote le requestas de transcriber]',
);

/** Indonesian (Bahasa Indonesia)
 * @author Farras
 * @author IvanLanin
 */
$messages['id'] = array(
	'mwe-timedtext-editor' => 'Penyunting teks berjangka waktu',
	'mwe-timedtext-stage-transcribe' => 'Transkripsikan',
	'mwe-timedtext-stage-sync' => 'Sinkronisasikan',
	'mwe-timedtext-stage-translate' => 'Terjemahkan',
	'mwe-timedtext-stage-upload' => 'Unggah dari berkas lokal',
	'mwe-timedtext-select-language' => 'Pilih bahasa',
	'mwe-timedtext-file-language' => 'Bahasa berkas subjudul',
	'mwe-timedtext-upload-text' => 'Unggah berkas teks',
	'mwe-timedtext-uploading-text' => 'Mengunggah berkas teks',
	'mwe-timedtext-upload-text-desc-title' => 'Unggah berkas teks',
	'mwe-timedtext-upload-text-desc-help' => 'Antarmuka berkas teks unggahan menerima berkas .srt',
	'mwe-timedtext-upload-text-desc-help-browse' => 'Ramban komputer Anda untuk berkas .srt yang ingin Anda unggah',
	'mwe-timedtext-upload-text-desc-help-select' => 'Pilih bahasa berkas',
	'mwe-timedtext-upload-text-desc-help-review' => 'Tinjau / sunting isi teks dan tekan unggah untuk menambahkan teks',
	'mwe-timedtext-upload-text-preview' => 'Tinjau teks',
	'mwe-timedtext-upload-text-success' => 'Pengunggahan teks berjangka waktu berhasil',
	'mwe-timedtext-upload-text-done' => 'Pengunggahan selesai',
	'mwe-timedtext-upload-text-fail-desc' => 'Pengunggahan tidak berhasil',
	'mwe-timedtext-upload-text-fail-title' => 'Gagal mengunggah',
	'mwe-timedtext-upload-text-another' => 'Unggah berkas lain',
	'mwe-timedtext-upload-text-done-uploading' => 'Selesai mengunggah',
	'mwe-timedtext-back-btn' => 'Kembali',
	'mwe-timedtext-choose-text' => 'Pilih teks',
	'mwe-timedtext-upload-timed-text' => 'Unggah teks film', # Fuzzy
	'mwe-timedtext-loading-text-edit' => 'Memuat penyunting teks berjangka waktu',
	'mwe-timedtext-search' => 'Cari klip',
	'mwe-timedtext-layout' => 'Tampilan',
	'mwe-timedtext-layout-ontop' => 'Di atas video',
	'mwe-timedtext-layout-below' => 'Di bawah video',
	'mwe-timedtext-layout-off' => 'Sembunyikan subjudul',
	'mwe-timedtext-loading-text' => 'Memuat teks ...',
	'mwe-timedtext-textcat-cc' => 'Keterangan',
	'mwe-timedtext-textcat-sub' => 'Subjudul',
	'mwe-timedtext-textcat-tad' => 'Deskripsi audio',
	'mwe-timedtext-textcat-ktv' => 'Karaoke',
	'mwe-timedtext-textcat-tik' => 'Teks tik',
	'mwe-timedtext-textcat-ar' => 'Wilayah aktif',
	'mwe-timedtext-textcat-nb' => 'Anotasi',
	'mwe-timedtext-textcat-meta' => 'Data meta berjangka waktu',
	'mwe-timedtext-textcat-trx' => 'Transkrip',
	'mwe-timedtext-textcat-lrc' => 'Lirik',
	'mwe-timedtext-textcat-lin' => 'Ubahan linguistik',
	'mwe-timedtext-textcat-cue' => 'Titik acuan',
	'mwe-timedtext-language-subtitles-for-clip' => 'Subjudul $1 untuk klip: $2',
	'mwe-timedtext-language-no-subtitles-for-clip' => 'Tidak ada subjudul $1 yang ditemukan untuk klip: $2',
	'mwe-timedtext-request-subs' => 'Minta transkripsi',
	'mwe-timedtext-no-subs' => 'Jalur teks tidak tersedia',
	'mwe-timedtext-request-subs-desc' => 'Berikan permintaan transkripsi untuk berkas video ini',
	'mwe-timedtext-request-subs-done' => 'Permintaan transkripsi ditambahkan. [$1 Lihat semua permintaan]',
	'mwe-timedtext-request-subs-fail' => 'Gagal menambah permintaan transkripsi. Apakah Anda masuk log?',
	'mwe-timedtext-request-already-done' => 'Transkripsi dari video ini telah diminta. [$1 Lihat semua permintaan]',
);

/** Italian (italiano)
 * @author Beta16
 * @author Darth Kule
 * @author F. Cosoleto
 * @author Gianfranco
 */
$messages['it'] = array(
	'mwe-timedtext-editor' => 'Editor sottotitoli',
	'mwe-timedtext-stage-transcribe' => 'Trascrivi',
	'mwe-timedtext-stage-sync' => 'Sincronizza',
	'mwe-timedtext-stage-translate' => 'Traduci',
	'mwe-timedtext-stage-upload' => 'Carica da file locale',
	'mwe-timedtext-select-language' => 'Seleziona lingua',
	'mwe-timedtext-file-language' => 'Lingua file sottotitoli',
	'mwe-timedtext-upload-text' => 'Carica file di testo',
	'mwe-timedtext-uploading-text' => 'Caricamento file di testo',
	'mwe-timedtext-upload-text-desc-title' => 'Carica file di testo',
	'mwe-timedtext-upload-text-desc-help' => "L'interfaccia per il caricamento dei file di testo accetta il file .srt",
	'mwe-timedtext-upload-text-desc-help-browse' => 'Sfoglia il computer locale per i file .srt che vuoi caricare',
	'mwe-timedtext-upload-text-desc-help-select' => 'Seleziona la lingua del file.',
	'mwe-timedtext-upload-text-desc-help-review' => 'Rivedi/modifica il contenuto del testo e premi carica per aggiungerlo',
	'mwe-timedtext-upload-text-preview' => 'Rivedi testo',
	'mwe-timedtext-upload-text-success' => 'Caricamento dei sottotitoli corretto',
	'mwe-timedtext-upload-text-done' => 'Caricamento completato',
	'mwe-timedtext-upload-text-fail-desc' => 'Caricamento fallito',
	'mwe-timedtext-upload-text-fail-title' => 'Caricamento non riuscito',
	'mwe-timedtext-upload-text-another' => 'Carica un altro',
	'mwe-timedtext-upload-text-done-uploading' => 'Completato caricamento',
	'mwe-timedtext-back-btn' => 'Indietro',
	'mwe-timedtext-choose-text' => 'Scegli il testo',
	'mwe-timedtext-upload-timed-text' => 'Aggiungi sottotitoli',
	'mwe-timedtext-loading-text-edit' => 'Caricamento editor sottotitoli',
	'mwe-timedtext-search' => 'Ricerca clip',
	'mwe-timedtext-layout' => 'Aspetto',
	'mwe-timedtext-layout-ontop' => 'Sopra il video',
	'mwe-timedtext-layout-below' => 'Sotto il video',
	'mwe-timedtext-layout-off' => 'Nascondi sottotitoli',
	'mwe-timedtext-loading-text' => 'Caricamento testo...',
	'mwe-timedtext-textcat-cc' => 'Didascalie',
	'mwe-timedtext-textcat-sub' => 'Sottotitoli',
	'mwe-timedtext-textcat-tad' => 'Descrizione audio',
	'mwe-timedtext-textcat-ktv' => 'Karaoke',
	'mwe-timedtext-textcat-ar' => 'Regioni attive',
	'mwe-timedtext-textcat-nb' => 'Annotazione',
	'mwe-timedtext-textcat-trx' => 'Trascrizione',
	'mwe-timedtext-textcat-lrc' => 'Testi',
	'mwe-timedtext-language-subtitles-for-clip' => 'sottotitoli in $1 per il clip: $2',
	'mwe-timedtext-language-no-subtitles-for-clip' => 'Sottotitoli in $1 non trovati per il clip: $2',
	'mwe-timedtext-request-subs' => 'Richiedi trascrizione',
	'mwe-timedtext-request-subs-desc' => 'Aggiungi una richiesta per la trascrizione di questo video',
	'mwe-timedtext-request-subs-done' => 'Richiesta di trascrizione aggiunta. [$1 Vedi tutte le richieste di trascrizione]',
	'mwe-timedtext-request-subs-fail' => "Impossibile aggiungere la richiesta di trascrizione. Hai effettuato l'accesso?",
	'mwe-timedtext-request-already-done' => 'Una trascrizione di questo video è già stata richiesta. [$1 Vedi tutte le richieste di trascrizione]',
);

/** Japanese (日本語)
 * @author Aotake
 * @author Hosiryuhosi
 * @author Shirayuki
 * @author Yanajin66
 * @author 青子守歌
 */
$messages['ja'] = array(
	'mwe-timedtext-editor' => '字幕エディター',
	'mwe-timedtext-stage-transcribe' => '文字起こし',
	'mwe-timedtext-stage-sync' => '同期',
	'mwe-timedtext-stage-translate' => '翻訳',
	'mwe-timedtext-stage-upload' => 'ローカルファイルからアップロード',
	'mwe-timedtext-select-language' => '言語を選択',
	'mwe-timedtext-file-language' => '字幕ファイルの言語',
	'mwe-timedtext-upload-text' => 'テキストファイルをアップロード',
	'mwe-timedtext-uploading-text' => 'テキストファイルのアップロード',
	'mwe-timedtext-upload-text-desc-title' => 'テキストファイルをアップロード',
	'mwe-timedtext-upload-text-desc-help' => 'アップロードするテキストファイルのインターフェイスは .srt ファイルを受け付けます',
	'mwe-timedtext-upload-text-desc-help-browse' => 'ローカルのコンピューターの上からアップロードする .srt ファイルを探す',
	'mwe-timedtext-upload-text-desc-help-select' => 'ファイルの言語を選択',
	'mwe-timedtext-upload-text-desc-help-review' => 'テキストの内容を確認・編集してからアップロードを押してテキストを追加してください',
	'mwe-timedtext-upload-text-preview' => 'テキストを確認',
	'mwe-timedtext-upload-text-success' => '字幕のアップロードに成功しました',
	'mwe-timedtext-upload-text-done' => 'アップロード完了',
	'mwe-timedtext-upload-text-fail-desc' => 'アップロードが失敗しました',
	'mwe-timedtext-upload-text-fail-title' => 'アップロードに失敗',
	'mwe-timedtext-upload-text-another' => '他にアップロード',
	'mwe-timedtext-upload-text-done-uploading' => 'アップロード完了',
	'mwe-timedtext-back-btn' => '戻る',
	'mwe-timedtext-choose-text' => 'テキストを選択',
	'mwe-timedtext-upload-timed-text' => '字幕を追加',
	'mwe-timedtext-loading-text-edit' => '字幕エディターの読み込み中',
	'mwe-timedtext-search' => 'クリップの検索',
	'mwe-timedtext-layout' => 'レイアウト',
	'mwe-timedtext-layout-ontop' => '動画の冒頭',
	'mwe-timedtext-layout-below' => '以下の動画',
	'mwe-timedtext-layout-off' => '字幕を隠す',
	'mwe-timedtext-loading-text' => 'テキストの読み込み中...',
	'mwe-timedtext-textcat-cc' => '見出し',
	'mwe-timedtext-textcat-sub' => '字幕',
	'mwe-timedtext-textcat-tad' => '音声の説明',
	'mwe-timedtext-textcat-ktv' => 'カラオケ',
	'mwe-timedtext-textcat-tik' => 'ティッカー文章',
	'mwe-timedtext-textcat-ar' => 'アクティブな領域',
	'mwe-timedtext-textcat-nb' => '注釈',
	'mwe-timedtext-textcat-meta' => '時間メタデータ',
	'mwe-timedtext-textcat-trx' => '複写',
	'mwe-timedtext-textcat-lrc' => '歌詞',
	'mwe-timedtext-textcat-lin' => '言語マーク',
	'mwe-timedtext-textcat-cue' => 'キューポイント',
	'mwe-timedtext-language-subtitles-for-clip' => 'クリップ$2のための$1字幕',
	'mwe-timedtext-language-no-subtitles-for-clip' => 'クリップ$2には$1字幕が見つかりませんでした。',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'mwe-timedtext-editor' => 'სინქრონიზირებული ტექსტის რედაქტირება',
	'mwe-timedtext-stage-transcribe' => 'სტენოგრამა',
	'mwe-timedtext-stage-sync' => 'სინქრონიზაცია',
	'mwe-timedtext-stage-translate' => 'თარგმნა',
	'mwe-timedtext-stage-upload' => 'ლოკალური ფაილებიდან ატვირთვა',
	'mwe-timedtext-select-language' => 'აირჩიეთ ენა',
	'mwe-timedtext-file-language' => 'სუბტიტრების ფაილის ენა',
	'mwe-timedtext-upload-text' => 'ტექსტური ფაილის ატვირთვა',
	'mwe-timedtext-uploading-text' => 'ტექსტური ფაილის ატვირთვა',
	'mwe-timedtext-upload-text-desc-title' => 'ტექსტური ფაილის ატვირთვა',
	'mwe-timedtext-upload-text-desc-help-select' => 'ამ ფაილის ენის არჩევა',
	'mwe-timedtext-upload-text-preview' => 'ტექსტის შემოწმება',
	'mwe-timedtext-upload-text-success' => 'სინქრონიზირებული ტექსტის ატვირთვა წარმატებით დასრულდა',
	'mwe-timedtext-upload-text-done' => 'ატვირთვა დასრულდა',
	'mwe-timedtext-upload-text-fail-desc' => 'ატვირთვა ვერ მოხერხდა',
	'mwe-timedtext-upload-text-fail-title' => 'ატვირთვა ვერ მოხერხდა',
	'mwe-timedtext-upload-text-another' => 'კიდევ ერთის ატვირთვა',
	'mwe-timedtext-upload-text-done-uploading' => 'ატვირთვა დასრულდა',
	'mwe-timedtext-back-btn' => 'უკან',
	'mwe-timedtext-choose-text' => 'აირჩიეთ ტექსტი',
	'mwe-timedtext-upload-timed-text' => 'სუბტიტრების დამატება',
	'mwe-timedtext-loading-text-edit' => 'სინქრონიზირებული ტექსტის რედაქტორის ჩატვირთვა',
	'mwe-timedtext-search' => 'კლიპის ძიება',
	'mwe-timedtext-layout' => 'მდებარეობა',
	'mwe-timedtext-layout-ontop' => 'ვიდეოს ზევით',
	'mwe-timedtext-layout-below' => 'ვიდეოს ქვევით',
	'mwe-timedtext-layout-off' => 'სუბტიტრების დამალვა',
	'mwe-timedtext-loading-text' => 'იტვირთება ტექსტი ...',
	'mwe-timedtext-textcat-cc' => 'წარწერები',
	'mwe-timedtext-textcat-sub' => 'სუბტიტრები',
	'mwe-timedtext-textcat-tad' => 'აუდიო აღწერა',
	'mwe-timedtext-textcat-ktv' => 'კარაოკე',
	'mwe-timedtext-textcat-tik' => 'ტექსტური ბარათები',
	'mwe-timedtext-textcat-ar' => 'აქტიური რეგიონები',
	'mwe-timedtext-textcat-nb' => 'ანოტაცია',
	'mwe-timedtext-textcat-meta' => 'სინქრონიზირებული მეტამონაცემები',
	'mwe-timedtext-textcat-trx' => 'სტენოგრამა',
	'mwe-timedtext-textcat-lrc' => 'სიმღერის ტექსტები',
	'mwe-timedtext-textcat-lin' => 'ლინგვისტური დანამატი',
	'mwe-timedtext-textcat-cue' => 'ნიშნული წერტილები',
	'mwe-timedtext-language-subtitles-for-clip' => '$1 სუბტიტრები კლიპისათვის: $2',
	'mwe-timedtext-request-subs' => 'ტრანსკრიფციის მოთხოვნა',
);

/** Korean (한국어)
 * @author 아라
 */
$messages['ko'] = array(
	'mwe-timedtext-textcat-cc' => '설명',
	'mwe-timedtext-textcat-nb' => '주석',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'mwe-timedtext-upload-text-preview' => 'Dä Täx nohkike',
	'mwe-timedtext-upload-text-success' => 'Dä Täx es jäz huhjelaade',
	'mwe-timedtext-language-no-subtitles-for-clip' => 'Mer han kei $1 Ongertittelle jefonge för dat Shtöck: $2',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'mwe-timedtext-stage-transcribe' => 'Ëmschreiwen',
	'mwe-timedtext-stage-sync' => 'Synchroniséieren',
	'mwe-timedtext-stage-translate' => 'Iwwersetzen',
	'mwe-timedtext-stage-upload' => 'E lokale Fichier eroplueden',
	'mwe-timedtext-select-language' => 'Sprooch eraussichen',
	'mwe-timedtext-file-language' => 'Sprooch vum Fichier mat den Ënnertitelen',
	'mwe-timedtext-upload-text' => 'Text-Fichier eroplueden',
	'mwe-timedtext-uploading-text' => 'Den Text-Fichier gëtt eropgelueden',
	'mwe-timedtext-upload-text-desc-title' => 'En Text-Fichier eroplueden',
	'mwe-timedtext-upload-text-desc-help-select' => "D'Sprooch vum Fichier eraussichen",
	'mwe-timedtext-upload-text-preview' => 'Text nokucken',
	'mwe-timedtext-upload-text-done' => 'Eroplueden ofgeschloss',
	'mwe-timedtext-upload-text-fail-desc' => "D'Eroplueden huet net fonctionnéiert",
	'mwe-timedtext-upload-text-fail-title' => "D'Eroplueden huet net fonctionnéiert",
	'mwe-timedtext-upload-text-another' => 'Nach een eroplueden',
	'mwe-timedtext-upload-text-done-uploading' => "D'Eroplueden ass fäerdeg",
	'mwe-timedtext-back-btn' => 'Zréck',
	'mwe-timedtext-choose-text' => 'Text eraussichen',
	'mwe-timedtext-upload-timed-text' => 'Ënnertitelen derbäisetzen',
	'mwe-timedtext-search' => 'Clip sichen',
	'mwe-timedtext-layout' => 'Layout',
	'mwe-timedtext-layout-ontop' => 'Iwwert dem Video',
	'mwe-timedtext-layout-below' => 'Ënnert dem Video',
	'mwe-timedtext-layout-off' => 'Ënnertitele verstoppen',
	'mwe-timedtext-loading-text' => 'Text gëtt gelueden ...',
	'mwe-timedtext-textcat-sub' => 'Ënnertitelen',
	'mwe-timedtext-textcat-tad' => 'Audio-Beschreiwung',
	'mwe-timedtext-textcat-ktv' => 'Karaoke',
	'mwe-timedtext-textcat-tik' => 'Text-Ticker',
	'mwe-timedtext-textcat-ar' => 'Aktiv Regiounen',
	'mwe-timedtext-textcat-nb' => 'Notiz',
	'mwe-timedtext-textcat-lrc' => 'Liddertext',
	'mwe-timedtext-textcat-lin' => 'Linguistesch Markéierung',
	'mwe-timedtext-textcat-cue' => 'Referenz-Punkten',
	'mwe-timedtext-language-subtitles-for-clip' => '$1 Ënnertitele fir de Clip: $2',
	'mwe-timedtext-language-no-subtitles-for-clip' => 'Keng $1 Ënnertitele goufe fonnt fir de Clip: $2',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'mwe-timedtext-editor' => 'Уредник на синхронизиран текст',
	'mwe-timedtext-stage-transcribe' => 'Направи стенограм',
	'mwe-timedtext-stage-sync' => 'Синхро',
	'mwe-timedtext-stage-translate' => 'Преведи',
	'mwe-timedtext-stage-upload' => 'Подигни од локална податотека',
	'mwe-timedtext-select-language' => 'Одберете јазик',
	'mwe-timedtext-file-language' => 'Јазик на податотеката со титл',
	'mwe-timedtext-upload-text' => 'Подигни податотека со текст',
	'mwe-timedtext-uploading-text' => 'Подигање на податотека со текст',
	'mwe-timedtext-upload-text-desc-title' => 'Подигни податотека со текст',
	'mwe-timedtext-upload-text-desc-help' => 'Посредникот за подигање текстуални податотеки прифаќа .srt податотеки',
	'mwe-timedtext-upload-text-desc-help-browse' => 'Одберете ја од вашиот сметач .srt податотеката што сакате да ја подигнете',
	'mwe-timedtext-upload-text-desc-help-select' => 'Одберете го јазикот на податотеката',
	'mwe-timedtext-upload-text-desc-help-review' => 'Проверете / исправете го текстот и потоа притиснете на „Подигни“ за да го додадете текстот',
	'mwe-timedtext-upload-text-preview' => 'Провери текст',
	'mwe-timedtext-upload-text-success' => 'Подигањето на синхронизиран текст е успешно',
	'mwe-timedtext-upload-text-done' => 'Подигањето е завршено',
	'mwe-timedtext-upload-text-fail-desc' => 'Подигањето е неуспешно',
	'mwe-timedtext-upload-text-fail-title' => 'Подигањето не успеа',
	'mwe-timedtext-upload-text-another' => 'Подигни друга',
	'mwe-timedtext-upload-text-done-uploading' => 'Готово со подигање',
	'mwe-timedtext-back-btn' => 'Назад',
	'mwe-timedtext-choose-text' => 'Одберете текст',
	'mwe-timedtext-upload-timed-text' => 'Стави титлови',
	'mwe-timedtext-loading-text-edit' => 'Ги вчитувам уредникот на синхронизиран текст',
	'mwe-timedtext-search' => 'Пребарај снимка',
	'mwe-timedtext-layout' => 'Распоред',
	'mwe-timedtext-layout-ontop' => 'Над снимката',
	'mwe-timedtext-layout-below' => 'Под снимката',
	'mwe-timedtext-layout-off' => 'Скриј титлови',
	'mwe-timedtext-loading-text' => 'Го вчитувам текстот...',
	'mwe-timedtext-textcat-cc' => 'Опис',
	'mwe-timedtext-textcat-sub' => 'Титлови',
	'mwe-timedtext-textcat-tad' => 'Аудио-опис',
	'mwe-timedtext-textcat-ktv' => 'Караоке',
	'mwe-timedtext-textcat-tik' => 'Текст-картички',
	'mwe-timedtext-textcat-ar' => 'Активни региони',
	'mwe-timedtext-textcat-nb' => 'Прибелешка',
	'mwe-timedtext-textcat-meta' => 'Синхронизирани метаподатоци',
	'mwe-timedtext-textcat-trx' => 'Стенограм',
	'mwe-timedtext-textcat-lrc' => 'Текст на песната',
	'mwe-timedtext-textcat-lin' => 'Лингвистичко означување',
	'mwe-timedtext-textcat-cue' => 'Моментни точки',
	'mwe-timedtext-language-subtitles-for-clip' => '$1 — титлови за снимката: $2',
	'mwe-timedtext-language-no-subtitles-for-clip' => 'Нема пронајдено титлови на $1 за снимката: $2',
	'mwe-timedtext-request-subs' => 'Побарај транскрипција',
	'mwe-timedtext-no-subs' => 'Нема титлови на располагање',
	'mwe-timedtext-request-subs-desc' => 'Постави барање за транскрипција на оваа видеоснимка',
	'mwe-timedtext-request-subs-done' => 'Барањето е поставено. [$1 Сите барања]',
	'mwe-timedtext-request-subs-fail' => 'Не успеав да поставам барање за транскрипција. Дали сте најавени?',
	'mwe-timedtext-request-already-done' => 'Веќе има поставено барање за транскрипција на оваа видеоснимка. [$1 Сите барања]',
);

/** Norwegian Bokmål (norsk (bokmål)‎)
 * @author Nghtwlkr
 */
$messages['nb'] = array(
	'mwe-timedtext-editor' => 'Editor for tidsbestemt tekst',
	'mwe-timedtext-stage-transcribe' => 'Transkriber',
	'mwe-timedtext-stage-sync' => 'Synkroniser',
	'mwe-timedtext-stage-translate' => 'Oversett',
	'mwe-timedtext-stage-upload' => 'Last opp fra lokal fil',
	'mwe-timedtext-select-language' => 'Velg språk',
	'mwe-timedtext-file-language' => 'Undertekstfilspråk',
	'mwe-timedtext-upload-text' => 'Last opp tekstfil',
	'mwe-timedtext-uploading-text' => 'Laster opp tekstfil',
	'mwe-timedtext-upload-text-desc-title' => 'Last opp en tekstfil',
	'mwe-timedtext-upload-text-desc-help' => 'Opplastingsgrensesnittet for tekstfiler aksepterer .srt-filer',
	'mwe-timedtext-upload-text-desc-help-browse' => 'Bla gjennom din lokale datamaskin etter .srt-filen du vil laste opp',
	'mwe-timedtext-upload-text-desc-help-select' => 'Velg filens språk',
	'mwe-timedtext-upload-text-desc-help-review' => 'Gjennomgå / rediger tekstinnholdet og klikk på last opp for å legge til teksten',
	'mwe-timedtext-upload-text-preview' => 'Gjennomgå teksten',
	'mwe-timedtext-upload-text-done' => 'Opplastingen ferdig',
	'mwe-timedtext-upload-text-fail-desc' => 'Opplastingen ble mislykket',
	'mwe-timedtext-upload-text-fail-title' => 'Opplastingen feilet',
	'mwe-timedtext-upload-text-another' => 'Last opp en til',
	'mwe-timedtext-upload-text-done-uploading' => 'Ferdig med å laste opp',
	'mwe-timedtext-back-btn' => 'Tilbake',
	'mwe-timedtext-choose-text' => 'Velg tekst',
	'mwe-timedtext-loading-text-edit' => 'Laster editor for tidsbestemt tekst',
	'mwe-timedtext-search' => 'Søk klipp',
	'mwe-timedtext-layout' => 'Oppsett',
	'mwe-timedtext-layout-ontop' => 'Over video',
	'mwe-timedtext-layout-below' => 'Under video',
	'mwe-timedtext-layout-off' => 'Gjem undertekster',
	'mwe-timedtext-loading-text' => 'Laster tekst ...',
	'mwe-timedtext-textcat-cc' => 'Undertektster',
	'mwe-timedtext-textcat-sub' => 'Undertekster',
	'mwe-timedtext-textcat-tad' => 'Lydbeskrivelse',
	'mwe-timedtext-textcat-ktv' => 'Karaoke',
	'mwe-timedtext-textcat-ar' => 'Aktive regioner',
	'mwe-timedtext-textcat-lrc' => 'Tekster',
	'mwe-timedtext-language-subtitles-for-clip' => '$1 undertekster for klipp: $2',
	'mwe-timedtext-language-no-subtitles-for-clip' => 'Ingen $1-undertekster ble funnet for klipp: $2',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'mwe-timedtext-editor' => 'Tekstverwerker voor ondertitels',
	'mwe-timedtext-stage-transcribe' => 'Transcriptie',
	'mwe-timedtext-stage-sync' => 'Synchroniseren',
	'mwe-timedtext-stage-translate' => 'Vertalen',
	'mwe-timedtext-stage-upload' => 'Uploaden van lokaal bestand',
	'mwe-timedtext-select-language' => 'Taal selecteren',
	'mwe-timedtext-file-language' => 'Taal ondertitelbestand',
	'mwe-timedtext-upload-text' => 'tekstbestand uploaden',
	'mwe-timedtext-uploading-text' => 'Bezig met het uploaden van het tekstbestand',
	'mwe-timedtext-upload-text-desc-title' => 'Tekstbestand uploaden',
	'mwe-timedtext-upload-text-desc-help' => 'De interface ondersteunt srt-bestanden',
	'mwe-timedtext-upload-text-desc-help-browse' => 'Selecteer op uw computer het te uploaden srt-bestand',
	'mwe-timedtext-upload-text-desc-help-select' => 'Selecteer de taal van het bestand',
	'mwe-timedtext-upload-text-desc-help-review' => 'Controleer of bewerk de tekst en klik op "Uploaden" om de tekst toe te voegen',
	'mwe-timedtext-upload-text-preview' => 'Tekst controleren',
	'mwe-timedtext-upload-text-success' => 'De upload van de tekst is geslaagd',
	'mwe-timedtext-upload-text-done' => 'Upload afgerond',
	'mwe-timedtext-upload-text-fail-desc' => 'De upload is mislukt',
	'mwe-timedtext-upload-text-fail-title' => 'Upload mislukt',
	'mwe-timedtext-upload-text-another' => 'Nog een tekstbestand uploaden',
	'mwe-timedtext-upload-text-done-uploading' => 'Upload afgerond',
	'mwe-timedtext-back-btn' => 'Terug',
	'mwe-timedtext-choose-text' => 'Tekst kiezen',
	'mwe-timedtext-upload-timed-text' => 'Ondertitels toevoegen',
	'mwe-timedtext-loading-text-edit' => 'Bezig met het laden van de tekstverwerker voor ondertitels',
	'mwe-timedtext-search' => 'Clip zoeken',
	'mwe-timedtext-layout' => 'Vormgeving',
	'mwe-timedtext-layout-ontop' => 'Boven de video',
	'mwe-timedtext-layout-below' => 'Onder de video',
	'mwe-timedtext-layout-off' => 'Ondertitels verbergen',
	'mwe-timedtext-loading-text' => 'Bezig met het laden van de tekst...',
	'mwe-timedtext-textcat-cc' => 'Ondertitels',
	'mwe-timedtext-textcat-sub' => 'Ondertitels',
	'mwe-timedtext-textcat-tad' => 'Audiobeschrijving',
	'mwe-timedtext-textcat-ktv' => 'Karaoke',
	'mwe-timedtext-textcat-tik' => 'Informatiebalk',
	'mwe-timedtext-textcat-ar' => 'Actieve gebieden',
	'mwe-timedtext-textcat-nb' => 'Annotatie',
	'mwe-timedtext-textcat-meta' => 'Tijdgebaseerde metadata',
	'mwe-timedtext-textcat-trx' => 'Transcriptie',
	'mwe-timedtext-textcat-lrc' => 'Songteksten',
	'mwe-timedtext-textcat-lin' => 'Taalkundige markup',
	'mwe-timedtext-textcat-cue' => 'Richtpunten',
	'mwe-timedtext-language-subtitles-for-clip' => 'Ondertitels in het $1 voor clip: $2',
	'mwe-timedtext-language-no-subtitles-for-clip' => 'Er zijn geen ondertitels in de taal $1 gevonden voor clip: $2',
	'mwe-timedtext-request-subs' => 'Transscriptieverzoek doen',
	'mwe-timedtext-no-subs' => 'Er zijn geen teksttracks beschikbaar',
	'mwe-timedtext-request-subs-desc' => 'Voerzoek toevoegen voor transscriptie van dit videobestand',
	'mwe-timedtext-request-subs-done' => 'Het transscriptieverzoek is toegevoegd. U kunt [$1 alle transscriptieverzoeken bekijken].',
	'mwe-timedtext-request-subs-fail' => 'Het toevoegen van het transscriptieverzoek is mislukt. Bent u wel aangemeld?',
	'mwe-timedtext-request-already-done' => 'Er bestaat al een transscriptieverzoek voor dit videobestand. U kunt [$1 alle transscriptieverzoeken bekijken].',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'mwe-timedtext-stage-translate' => 'Iwwersetze',
	'mwe-timedtext-back-btn' => 'Zerrick',
);

/** Pälzisch (Pälzisch)
 * @author Manuae
 */
$messages['pfl'] = array(
	'mwe-timedtext-stage-translate' => 'Iwasedze',
);

/** Polish (polski)
 * @author BeginaFelicysym
 * @author Leinad
 * @author Shadown
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'mwe-timedtext-editor' => 'Edytor napisów do filmu',
	'mwe-timedtext-stage-transcribe' => 'Rozpisz',
	'mwe-timedtext-stage-sync' => 'Synchronizacja',
	'mwe-timedtext-stage-translate' => 'Przetłumacz',
	'mwe-timedtext-stage-upload' => 'Prześlij z lokalnego pliku',
	'mwe-timedtext-select-language' => 'Wybierz język',
	'mwe-timedtext-file-language' => 'Język pliku z napisami do filmu',
	'mwe-timedtext-upload-text' => 'Prześlij plik tekstowy',
	'mwe-timedtext-uploading-text' => 'Przesyłanie pliku tekstowego',
	'mwe-timedtext-upload-text-desc-title' => 'Prześlij plik tekstowy',
	'mwe-timedtext-upload-text-desc-help' => 'Interfejs przesyłania plików tekstowych akceptuje pliki w formacie .srt',
	'mwe-timedtext-upload-text-desc-help-browse' => 'Odnajdź na swoim komputerze plik .srt, który chcesz przesłać',
	'mwe-timedtext-upload-text-desc-help-select' => 'Wybierz język pliku',
	'mwe-timedtext-upload-text-desc-help-review' => 'Sprawdź i popraw treść, a następnie wciśnij prześlij aby dodać tekst',
	'mwe-timedtext-upload-text-preview' => 'Sprawdzanie tekstu',
	'mwe-timedtext-upload-text-success' => 'Przesłano tekst ze znacznikami czasu',
	'mwe-timedtext-upload-text-done' => 'Przesłano',
	'mwe-timedtext-upload-text-fail-desc' => 'Przesyłanie nie powiodło się',
	'mwe-timedtext-upload-text-fail-title' => 'Przesłanie nieudane',
	'mwe-timedtext-upload-text-another' => 'Prześlij inny',
	'mwe-timedtext-upload-text-done-uploading' => 'Przesyłanie zakończone',
	'mwe-timedtext-back-btn' => 'Wstecz',
	'mwe-timedtext-choose-text' => 'Wybierz tekst',
	'mwe-timedtext-upload-timed-text' => 'Dodaj napisy',
	'mwe-timedtext-loading-text-edit' => 'Ładowanie edytora tekstu ze znacznikami czasu',
	'mwe-timedtext-search' => 'Szukaj klipu',
	'mwe-timedtext-layout' => 'Układ',
	'mwe-timedtext-layout-ontop' => 'Na górze filmu',
	'mwe-timedtext-layout-below' => 'Poniżej obrazu',
	'mwe-timedtext-layout-off' => 'Ukryj napisy',
	'mwe-timedtext-loading-text' => 'Ładowanie tekstu...',
	'mwe-timedtext-textcat-cc' => 'Podpisy',
	'mwe-timedtext-textcat-sub' => 'Napisy do filmu',
	'mwe-timedtext-textcat-tad' => 'Opis ścieżki dźwiękowej',
	'mwe-timedtext-textcat-ktv' => 'Karaoke',
	'mwe-timedtext-textcat-tik' => 'Notatka',
	'mwe-timedtext-textcat-ar' => 'Aktywne regiony',
	'mwe-timedtext-textcat-nb' => 'Adnotacja',
	'mwe-timedtext-textcat-meta' => 'Metadane ze znacznikami czasu',
	'mwe-timedtext-textcat-trx' => 'Rozpisz',
	'mwe-timedtext-textcat-lrc' => 'Teksty piosenek',
	'mwe-timedtext-textcat-lin' => 'Znaczniki językowe',
	'mwe-timedtext-textcat-cue' => 'Punkty kontrolne',
	'mwe-timedtext-language-subtitles-for-clip' => '$1 napisy do filmu: $2',
	'mwe-timedtext-language-no-subtitles-for-clip' => 'Nie odnaleziono $1 napisów do filmu: $2',
	'mwe-timedtext-request-subs' => 'Poproś o transkrypcję',
	'mwe-timedtext-no-subs' => 'Nie ma dostępnych ścieżek tekstowych',
	'mwe-timedtext-request-subs-desc' => 'Dodaj prośbę transkrypcji dla tego pliku wideo',
	'mwe-timedtext-request-subs-done' => 'Dodano prośbę transkrypcji. [ $1  Zobacz wszystkie prośby transkrypcji]',
	'mwe-timedtext-request-subs-fail' => 'Nie udało się doanie prośby transkrypcji. Czy jesteś zalogowany?',
	'mwe-timedtext-request-already-done' => 'Już złożono prośbę o transkrypcję tego wideo. [ $1  Zobacz wszystkie prośby transkrypcji]',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'mwe-timedtext-editor' => 'Editor ëd test temporisà',
	'mwe-timedtext-stage-transcribe' => 'Trascriv',
	'mwe-timedtext-stage-sync' => 'Sincronisa',
	'mwe-timedtext-stage-translate' => 'Volté',
	'mwe-timedtext-stage-upload' => "Carié da n'archivi local",
	'mwe-timedtext-select-language' => 'Serne la lenga',
	'mwe-timedtext-file-language' => "Lenga dl'archivi ëd sot-tìtoj",
	'mwe-timedtext-upload-text' => "Carié n'archivi ëd test",
	'mwe-timedtext-uploading-text' => "Cariament dl'archivi ëd test",
	'mwe-timedtext-upload-text-desc-title' => "Carié n'archivi ëd test",
	'mwe-timedtext-upload-text-desc-help' => "L'antërfacia ëd cariament ëd l'archivi ëd test a aceta j'archivi .srt",
	'mwe-timedtext-upload-text-desc-help-browse' => "Ch'a sërca su sò orinator local l'archivi .srt ch'a veul carié",
	'mwe-timedtext-upload-text-desc-help-select' => "Selessioné la lenga ëd l'archivi",
	'mwe-timedtext-upload-text-desc-help-review' => 'Revision-a/modìfica ël contnù dël test e peui sgnaca caria për gionté ël test',
	'mwe-timedtext-upload-text-preview' => 'Controlé ël test',
	'mwe-timedtext-upload-text-success' => "Ël cariament dël test sincronisà a l'é andàit bin",
	'mwe-timedtext-upload-text-done' => 'Cariament fàit e finì',
	'mwe-timedtext-upload-text-fail-desc' => "Ël cariament a l'é nen riussì",
	'mwe-timedtext-upload-text-fail-title' => "Ël cariament a l'é falì",
	'mwe-timedtext-upload-text-another' => "Carié n'àutr",
	'mwe-timedtext-upload-text-done-uploading' => 'Cariament fàit',
	'mwe-timedtext-back-btn' => 'André',
	'mwe-timedtext-choose-text' => 'Serne ël test',
	'mwe-timedtext-upload-timed-text' => 'Gionté dij sot-tìtoj',
	'mwe-timedtext-loading-text-edit' => "Cariament ëd l'editor ëd test sincronisà",
	'mwe-timedtext-search' => 'Sërché un tòch filmà',
	'mwe-timedtext-layout' => 'Presentassion',
	'mwe-timedtext-layout-ontop' => 'An cò dël filmà',
	'mwe-timedtext-layout-below' => 'Sota ël filmà',
	'mwe-timedtext-layout-off' => 'Stërmé ij sot-tìtoj',
	'mwe-timedtext-loading-text' => 'Cariament dël test...',
	'mwe-timedtext-textcat-cc' => 'Descrission',
	'mwe-timedtext-textcat-sub' => 'Sot-tìtoj',
	'mwe-timedtext-textcat-tad' => 'Descrission àudio',
	'mwe-timedtext-textcat-ktv' => 'Karaoke',
	'mwe-timedtext-textcat-tik' => 'Test ëd la telescrivent',
	'mwe-timedtext-textcat-ar' => 'Region ative',
	'mwe-timedtext-textcat-nb' => 'Nòta',
	'mwe-timedtext-textcat-meta' => 'Metadat sincronisà',
	'mwe-timedtext-textcat-trx' => 'Trascrission',
	'mwe-timedtext-textcat-lrc' => 'Lìriche',
	'mwe-timedtext-textcat-lin' => 'Marcador lenghìstich',
	'mwe-timedtext-textcat-cue' => "Pont d'arferiment",
	'mwe-timedtext-language-subtitles-for-clip' => '$1 sot-tìtoj për ël tòch: $2',
	'mwe-timedtext-language-no-subtitles-for-clip' => "A l'é trovasse gnun sot-tìtoj $1 per ël tòch: $2",
	'mwe-timedtext-request-subs' => 'Arcesta ëd trascrission',
	'mwe-timedtext-no-subs' => 'Gnun-e marche ëd test disponìbij',
	'mwe-timedtext-request-subs-desc' => "Gionté n'arcesta përchè cost archivi filmà a sia trascrivù",
	'mwe-timedtext-request-subs-done' => "Arcesta ëd trascrission giontà. [$1 Vardé tute j'arceste ëd trascrission]",
	'mwe-timedtext-request-subs-fail' => "Falì a gionté l'arcesta ëd trascrission. É-lo intrà ant ël sistema?",
	'mwe-timedtext-request-already-done' => "Na trascrission d'ës filmà a l'é già stàita ciamà. [$1 Vardé tute j'arceste ëd trascrission]",
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'mwe-timedtext-stage-translate' => 'ژباړل',
	'mwe-timedtext-select-language' => 'ژبه ټاکل',
	'mwe-timedtext-choose-text' => 'متن ټاکل',
	'mwe-timedtext-textcat-ktv' => 'کارااوکه',
);

/** Portuguese (português)
 * @author Giro720
 * @author Hamilton Abreu
 * @author SandroHc
 */
$messages['pt'] = array(
	'mwe-timedtext-editor' => 'Editor de legendas',
	'mwe-timedtext-stage-transcribe' => 'Transcrever',
	'mwe-timedtext-stage-sync' => 'Sincronizar',
	'mwe-timedtext-stage-translate' => 'Traduzir',
	'mwe-timedtext-stage-upload' => 'Carregar a partir de ficheiro local',
	'mwe-timedtext-select-language' => 'Escolher a língua',
	'mwe-timedtext-file-language' => 'Língua do ficheiro de legendas',
	'mwe-timedtext-upload-text' => 'Carregar ficheiro de texto',
	'mwe-timedtext-uploading-text' => 'A carregar o ficheiro de texto',
	'mwe-timedtext-upload-text-desc-title' => 'Carregar um ficheiro de texto',
	'mwe-timedtext-upload-text-desc-help' => 'A interface de upload de ficheiros de texto aceita ficheiros .srt.',
	'mwe-timedtext-upload-text-desc-help-browse' => 'Procure no seu computador local o ficheiro .srt que pretende carregar',
	'mwe-timedtext-upload-text-desc-help-select' => 'Seleccione a língua do ficheiro',
	'mwe-timedtext-upload-text-desc-help-review' => 'Reveja ou edite o texto e clique upload para adicioná-lo',
	'mwe-timedtext-upload-text-preview' => 'Rever o texto',
	'mwe-timedtext-upload-text-success' => 'Foi feito o upload das legendas',
	'mwe-timedtext-upload-text-done' => 'Upload terminado',
	'mwe-timedtext-upload-text-fail-desc' => 'Não foi feito o upload',
	'mwe-timedtext-upload-text-fail-title' => 'O upload falhou',
	'mwe-timedtext-upload-text-another' => 'Carregar outro',
	'mwe-timedtext-upload-text-done-uploading' => 'Não carregar mais',
	'mwe-timedtext-back-btn' => 'Voltar',
	'mwe-timedtext-choose-text' => 'Escolher texto',
	'mwe-timedtext-upload-timed-text' => 'Adicionar legendas',
	'mwe-timedtext-loading-text-edit' => 'A carregar o editor de legendas',
	'mwe-timedtext-search' => 'Procurar clipe',
	'mwe-timedtext-layout' => 'Posição',
	'mwe-timedtext-layout-ontop' => 'Sobre o vídeo',
	'mwe-timedtext-layout-below' => 'Abaixo do vídeo',
	'mwe-timedtext-layout-off' => 'Esconder legendas',
	'mwe-timedtext-loading-text' => 'A carregar o texto ...',
	'mwe-timedtext-textcat-cc' => 'Títulos',
	'mwe-timedtext-textcat-sub' => 'Legendas',
	'mwe-timedtext-textcat-tad' => 'Descrição áudio',
	'mwe-timedtext-textcat-ktv' => 'Karaoke',
	'mwe-timedtext-textcat-tik' => 'Cotações',
	'mwe-timedtext-textcat-ar' => 'Regiões activas',
	'mwe-timedtext-textcat-nb' => 'Anotação',
	'mwe-timedtext-textcat-meta' => 'Metadados de sincronização',
	'mwe-timedtext-textcat-trx' => 'Transcrição',
	'mwe-timedtext-textcat-lrc' => 'Letra',
	'mwe-timedtext-textcat-lin' => 'Marcação linguística',
	'mwe-timedtext-textcat-cue' => 'Pontos de entrada',
	'mwe-timedtext-language-subtitles-for-clip' => 'Legendas em $1 para o clipe: $2',
	'mwe-timedtext-language-no-subtitles-for-clip' => 'Não foram encontradas legendas em $1 para o clipe: $2',
	'mwe-timedtext-request-subs' => 'Pedir transcrição',
	'mwe-timedtext-no-subs' => 'Não há nenhuma faixa de texto disponível',
	'mwe-timedtext-request-subs-desc' => 'Adicionar um pedido para este ficheiro de vídeo ser transcrito',
	'mwe-timedtext-request-subs-done' => 'O pedido de transcrição foi adicionado. [$1 Ver todos os pedidos de transcrição]',
	'mwe-timedtext-request-subs-fail' => 'Não foi possível adicionar o pedido de transcrição. Está autenticado?',
	'mwe-timedtext-request-already-done' => 'Já foi pedida anteriormente uma transcrição deste vídeo. [$1 Ver todos os pedidos de transcrição]',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Giro720
 * @author Luckas Blade
 * @author 555
 */
$messages['pt-br'] = array(
	'mwe-timedtext-editor' => 'Editor de legendas',
	'mwe-timedtext-stage-transcribe' => 'Transcrever',
	'mwe-timedtext-stage-sync' => 'Sincronizar',
	'mwe-timedtext-stage-translate' => 'Traduzir',
	'mwe-timedtext-stage-upload' => 'Carregar a partir de arquivo local',
	'mwe-timedtext-select-language' => 'Selecionar língua',
	'mwe-timedtext-file-language' => 'Língua do arquivo de legendas',
	'mwe-timedtext-upload-text' => 'Carregar arquivo de texto',
	'mwe-timedtext-uploading-text' => 'Carregando um arquivo de texto',
	'mwe-timedtext-upload-text-desc-title' => 'Carregar um arquivo de texto',
	'mwe-timedtext-upload-text-desc-help' => 'A interface de carregamento de arquivos de texto aceita arquivos .srt.',
	'mwe-timedtext-upload-text-desc-help-browse' => 'Procure no seus arquivos locais o arquivo .srt que você pretende carregar',
	'mwe-timedtext-upload-text-desc-help-select' => 'Selecione a língua do arquivo',
	'mwe-timedtext-upload-text-desc-help-review' => 'Revise e edite o texto e carregue em upload para adicioná-lo',
	'mwe-timedtext-upload-text-preview' => 'Revisar o texto',
	'mwe-timedtext-upload-text-success' => 'Foi feito o carregamento das legendas com sucesso',
	'mwe-timedtext-upload-text-done' => 'Carregamento terminado',
	'mwe-timedtext-upload-text-fail-desc' => 'Não foi feito o carregamento',
	'mwe-timedtext-upload-text-fail-title' => 'O carregamento falhou',
	'mwe-timedtext-upload-text-another' => 'Carregar outro',
	'mwe-timedtext-upload-text-done-uploading' => 'Carregamento feito',
	'mwe-timedtext-back-btn' => 'Voltar',
	'mwe-timedtext-choose-text' => 'Escolher texto',
	'mwe-timedtext-upload-timed-text' => 'Carregar legendas', # Fuzzy
	'mwe-timedtext-loading-text-edit' => 'Carregando editor de legendas',
	'mwe-timedtext-search' => 'Procurar clipe',
	'mwe-timedtext-layout' => 'Posição',
	'mwe-timedtext-layout-ontop' => 'Sobre o vídeo',
	'mwe-timedtext-layout-below' => 'Abaixo do vídeo',
	'mwe-timedtext-layout-off' => 'Ocultar legendas',
	'mwe-timedtext-loading-text' => 'Carregando o texto ...',
	'mwe-timedtext-textcat-cc' => 'Títulos',
	'mwe-timedtext-textcat-sub' => 'Legendas',
	'mwe-timedtext-textcat-tad' => 'Descrição áudio',
	'mwe-timedtext-textcat-ktv' => 'Karaoke',
	'mwe-timedtext-textcat-tik' => 'Cotações',
	'mwe-timedtext-textcat-ar' => 'Regiões ativas',
	'mwe-timedtext-textcat-nb' => 'Anotação',
	'mwe-timedtext-textcat-meta' => 'Metadados de sincronização',
	'mwe-timedtext-textcat-trx' => 'Transcrição',
	'mwe-timedtext-textcat-lrc' => 'Letra',
	'mwe-timedtext-textcat-lin' => 'Marcação linguística',
	'mwe-timedtext-textcat-cue' => 'Pontos de entrada',
	'mwe-timedtext-language-subtitles-for-clip' => 'Legendas em $1 para o clipe: $2',
	'mwe-timedtext-language-no-subtitles-for-clip' => 'Não foram encontradas legendas em $1 para o clipe: $2',
);

/** Romanian (română)
 * @author Minisarm
 * @author Stelistcristi
 */
$messages['ro'] = array(
	'mwe-timedtext-stage-transcribe' => 'Transcrie',
	'mwe-timedtext-stage-sync' => 'Sincronizează',
	'mwe-timedtext-stage-translate' => 'Tradu',
	'mwe-timedtext-select-language' => 'Selectare limbă',
	'mwe-timedtext-file-language' => 'Limba fișierului de subtitrare',
	'mwe-timedtext-upload-text-desc-help-select' => 'Selectați limba fișierului',
	'mwe-timedtext-upload-text-preview' => 'Revizuiește textul',
	'mwe-timedtext-upload-text-done' => 'Încărcare realizată',
	'mwe-timedtext-upload-text-fail-desc' => 'Încărcarea nu s-a încheiat cu succes',
	'mwe-timedtext-upload-text-fail-title' => 'Încărcarea a eșuat',
	'mwe-timedtext-upload-text-another' => 'Încarcă altul',
	'mwe-timedtext-upload-text-done-uploading' => 'S-a terminat încărcarea',
	'mwe-timedtext-back-btn' => 'Înapoi',
	'mwe-timedtext-choose-text' => 'Alege textul',
	'mwe-timedtext-upload-timed-text' => 'Adaugă subtitrări',
	'mwe-timedtext-layout' => 'Aspect',
	'mwe-timedtext-layout-off' => 'Ascunde subtitrările',
	'mwe-timedtext-loading-text' => 'Se încarcă textul...',
	'mwe-timedtext-textcat-sub' => 'Subtitrări',
	'mwe-timedtext-textcat-tad' => 'Descriere audio',
	'mwe-timedtext-textcat-ktv' => 'Karaoke',
	'mwe-timedtext-textcat-ar' => 'Regiuni active',
	'mwe-timedtext-textcat-nb' => 'Adnotare',
	'mwe-timedtext-textcat-trx' => 'Transcripție',
	'mwe-timedtext-textcat-lrc' => 'Versuri',
);

/** Russian (русский)
 * @author MaxSem
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'mwe-timedtext-editor' => 'Редактор синхронизированного текста',
	'mwe-timedtext-stage-transcribe' => 'Стенограмма',
	'mwe-timedtext-stage-sync' => 'Синхро',
	'mwe-timedtext-stage-translate' => 'Перевод',
	'mwe-timedtext-stage-upload' => 'Загрузить из локального файла',
	'mwe-timedtext-select-language' => 'Выберите язык',
	'mwe-timedtext-file-language' => 'Язык файла субтитров',
	'mwe-timedtext-upload-text' => 'Загрузить текстовый файл',
	'mwe-timedtext-uploading-text' => 'Загрузка текстового файла',
	'mwe-timedtext-upload-text-desc-title' => 'Загрузка текстового файла',
	'mwe-timedtext-upload-text-desc-help' => 'Интерфейс загрузки текстовых файлов принимает формат .srt',
	'mwe-timedtext-upload-text-desc-help-browse' => 'Укажите на вашем компьютере файл .srt, который вы хотите загрузить',
	'mwe-timedtext-upload-text-desc-help-select' => 'Выберите язык этого файла',
	'mwe-timedtext-upload-text-desc-help-review' => 'Проверьте / исправьте текст и нажмите «Загрузить», чтобы добавить текст',
	'mwe-timedtext-upload-text-preview' => 'Проверить текст',
	'mwe-timedtext-upload-text-success' => 'Загрузка синхронизированного текста прошла успешна',
	'mwe-timedtext-upload-text-done' => 'Загрузка завершена',
	'mwe-timedtext-upload-text-fail-desc' => 'Загрузка не удалась',
	'mwe-timedtext-upload-text-fail-title' => 'Сбой при загрузке',
	'mwe-timedtext-upload-text-another' => 'Добавить ещё один',
	'mwe-timedtext-upload-text-done-uploading' => 'Загрузка завершена',
	'mwe-timedtext-back-btn' => 'Назад',
	'mwe-timedtext-choose-text' => 'Выберите текст',
	'mwe-timedtext-upload-timed-text' => 'Загрузить субтитры', # Fuzzy
	'mwe-timedtext-loading-text-edit' => 'Загрузка редактора синхронизированного текста',
	'mwe-timedtext-search' => 'Поиск клипа',
	'mwe-timedtext-layout' => 'Положение',
	'mwe-timedtext-layout-ontop' => 'В верху видео',
	'mwe-timedtext-layout-below' => 'Внизу видео',
	'mwe-timedtext-layout-off' => 'Скрыть субтитры',
	'mwe-timedtext-loading-text' => 'Загрузка текста…',
	'mwe-timedtext-textcat-cc' => 'Субтитры-описания',
	'mwe-timedtext-textcat-sub' => 'Субтитры',
	'mwe-timedtext-textcat-tad' => 'Аудио-описание',
	'mwe-timedtext-textcat-ktv' => 'Караоке',
	'mwe-timedtext-textcat-tik' => 'Текстовые карточки',
	'mwe-timedtext-textcat-ar' => 'Активные области',
	'mwe-timedtext-textcat-nb' => 'Аннотация',
	'mwe-timedtext-textcat-meta' => 'Синхронизированные метаданные',
	'mwe-timedtext-textcat-trx' => 'Стенограмма',
	'mwe-timedtext-textcat-lrc' => 'Слова песни',
	'mwe-timedtext-textcat-lin' => 'Лингвистическая разметка',
	'mwe-timedtext-textcat-cue' => 'Знаковые точки',
	'mwe-timedtext-language-subtitles-for-clip' => '$1 — субтитры для клипа: $2',
	'mwe-timedtext-language-no-subtitles-for-clip' => 'Не найдено субтитров на $1 для клипа: $2',
	'mwe-timedtext-request-subs' => 'Запрос транскрипции',
	'mwe-timedtext-no-subs' => 'Нет текстовых дорожек',
	'mwe-timedtext-request-subs-desc' => 'Добавить запрос на транскрипцию этого видео',
	'mwe-timedtext-request-subs-done' => 'Добавлен запрос на транскрипцию. [$1 Просмотреть все запросы]',
	'mwe-timedtext-request-subs-fail' => 'Не удалось добавить запрос на транскрипцию. Вы представились системе?',
	'mwe-timedtext-request-already-done' => 'Транскрипция этого видео уже была запрошена. [$1 Просмотреть все запросы]',
);

/** Rusyn (русиньскый)
 * @author Gazeb
 */
$messages['rue'] = array(
	'mwe-timedtext-back-btn' => 'Назад',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'mwe-timedtext-stage-translate' => 'පරිවර්තනය කරන්න',
	'mwe-timedtext-select-language' => 'භාෂාව තෝරන්න',
	'mwe-timedtext-back-btn' => 'ආපසු',
);

/** Slovenian (slovenščina)
 * @author Dbc334
 */
$messages['sl'] = array(
	'mwe-timedtext-stage-translate' => 'Prevedi',
	'mwe-timedtext-back-btn' => 'Nazaj',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Rancher
 * @author Михајло Анђелковић
 */
$messages['sr-ec'] = array(
	'mwe-timedtext-editor' => 'Уредник усклађеног текста',
	'mwe-timedtext-stage-transcribe' => 'Направи транскрипт',
	'mwe-timedtext-stage-sync' => 'Усклади',
	'mwe-timedtext-stage-translate' => 'Преведи',
	'mwe-timedtext-stage-upload' => 'Пошаљи датотеку са рачунара',
	'mwe-timedtext-select-language' => 'Изабери језик',
	'mwe-timedtext-file-language' => 'Језик титла',
	'mwe-timedtext-upload-text' => 'Отпреми текстуалну датотеку',
	'mwe-timedtext-uploading-text' => 'Отпремање текстуалне датотеке',
	'mwe-timedtext-upload-text-desc-title' => 'Отпремање текстуалне датотеке',
	'mwe-timedtext-upload-text-done' => 'Слање је завршено',
	'mwe-timedtext-upload-text-fail-desc' => 'Слање је било неуспешно',
	'mwe-timedtext-upload-text-fail-title' => 'Слање није прошло',
	'mwe-timedtext-upload-text-another' => 'Пошаљи дурги',
	'mwe-timedtext-upload-text-done-uploading' => 'Слање је завршено',
	'mwe-timedtext-back-btn' => 'Назад',
	'mwe-timedtext-layout-off' => 'Сакриј сабтајтлове',
	'mwe-timedtext-loading-text' => 'Учитава се текст ...',
	'mwe-timedtext-key-language' => '$1, $2',
	'mwe-timedtext-textcat-cc' => 'Ознаке',
	'mwe-timedtext-textcat-sub' => 'Поднаслови',
	'mwe-timedtext-textcat-trx' => 'Транскрипт',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 * @author Rancher
 */
$messages['sr-el'] = array(
	'mwe-timedtext-editor' => 'Urednik usklađenog teksta',
	'mwe-timedtext-stage-transcribe' => 'Napravi transkript',
	'mwe-timedtext-stage-sync' => 'Uskladi',
	'mwe-timedtext-stage-translate' => 'Prevedi',
	'mwe-timedtext-stage-upload' => 'Pošalji datoteku sa računara',
	'mwe-timedtext-select-language' => 'Izaberi jezik',
	'mwe-timedtext-file-language' => 'Jezik titla',
	'mwe-timedtext-upload-text' => 'Otpremi tekstualnu datoteku',
	'mwe-timedtext-uploading-text' => 'Otpremanje tekstualne datoteke',
	'mwe-timedtext-upload-text-desc-title' => 'Otpremanje tekstualne datoteke',
	'mwe-timedtext-upload-text-done' => 'Slanje je završeno',
	'mwe-timedtext-upload-text-fail-desc' => 'Slanje je bilo neuspešno',
	'mwe-timedtext-upload-text-fail-title' => 'Slanje nije prošlo',
	'mwe-timedtext-upload-text-another' => 'Pošalji durgi',
	'mwe-timedtext-upload-text-done-uploading' => 'Slanje je završeno',
	'mwe-timedtext-back-btn' => 'Nazad',
	'mwe-timedtext-layout-off' => 'Sakrij sabtajtlove',
	'mwe-timedtext-loading-text' => 'Učitava se tekst ...',
	'mwe-timedtext-key-language' => '$1, $2',
	'mwe-timedtext-textcat-cc' => 'Oznake',
	'mwe-timedtext-textcat-sub' => 'Podnaslovi',
	'mwe-timedtext-textcat-trx' => 'Transkript',
);

/** Swedish (svenska)
 * @author Ainali
 * @author Dafer45
 */
$messages['sv'] = array(
	'mwe-timedtext-stage-transcribe' => 'Transkribera',
	'mwe-timedtext-stage-sync' => 'Sync',
	'mwe-timedtext-stage-translate' => 'Översätt',
	'mwe-timedtext-stage-upload' => 'Ladda upp från lokal fil',
	'mwe-timedtext-select-language' => 'Välj språk',
	'mwe-timedtext-file-language' => 'Undertextfilspråk',
	'mwe-timedtext-upload-text' => 'Ladda upp textfil',
	'mwe-timedtext-uploading-text' => 'Laddar upp textfil',
	'mwe-timedtext-upload-text-desc-title' => 'Ladda upp en textfil',
	'mwe-timedtext-upload-text-desc-help' => 'Uppladdningsgränssnittet för textfiler accepterar .srt-filer',
	'mwe-timedtext-upload-text-desc-help-browse' => 'Bläddra på din lokala dator efter .srt filen du vill ladda upp',
	'mwe-timedtext-upload-text-desc-help-select' => 'Välj filens språk',
	'mwe-timedtext-upload-text-desc-help-review' => 'Granska / redigera textens innehåll och tryck sedan ladda upp för att lägga till text',
	'mwe-timedtext-upload-text-preview' => 'Granska text',
	'mwe-timedtext-upload-text-done' => 'Uppladdning klar',
	'mwe-timedtext-upload-text-fail-desc' => 'Uppladdningen misslyckades',
	'mwe-timedtext-upload-text-fail-title' => 'Uppladdning misslyckades',
	'mwe-timedtext-upload-text-another' => 'Ladda upp en till',
	'mwe-timedtext-upload-text-done-uploading' => 'Klar med uppladdning',
	'mwe-timedtext-back-btn' => 'Tillbaka',
	'mwe-timedtext-choose-text' => 'Välj text',
	'mwe-timedtext-upload-timed-text' => 'Lägga till undertexter',
	'mwe-timedtext-search' => 'Sök klipp',
	'mwe-timedtext-layout' => 'Layout',
	'mwe-timedtext-layout-ontop' => 'Ovanför video',
	'mwe-timedtext-layout-below' => 'Under video',
	'mwe-timedtext-layout-off' => 'Dölj undertexter',
	'mwe-timedtext-loading-text' => 'Laddar text ...',
	'mwe-timedtext-textcat-sub' => 'Undertexter',
	'mwe-timedtext-textcat-tad' => 'Ljudbeskrivning',
	'mwe-timedtext-textcat-ktv' => 'Karaoke',
	'mwe-timedtext-textcat-ar' => 'Aktiva regioner',
	'mwe-timedtext-textcat-nb' => 'Anmärkning',
	'mwe-timedtext-textcat-trx' => 'Transkription',
	'mwe-timedtext-textcat-lrc' => 'Texter',
	'mwe-timedtext-textcat-lin' => 'Språkliga markeringar',
	'mwe-timedtext-textcat-cue' => 'Referenspunkter',
	'mwe-timedtext-language-subtitles-for-clip' => '$1 undertexter för klipp: $2',
	'mwe-timedtext-language-no-subtitles-for-clip' => 'Inga $1 undertexter hittades för klipp: $2',
	'mwe-timedtext-request-subs' => 'Begäran transkription',
	'mwe-timedtext-no-subs' => 'Inga textspår finns',
	'mwe-timedtext-request-subs-desc' => 'Lägga till en begäran om att denna videofil ska transkriberas',
	'mwe-timedtext-request-subs-done' => 'Transkriptionsbegäran lades till. [$1 Se alla transkribeeringsbegäranden]',
	'mwe-timedtext-request-subs-fail' => 'Det gick inte att lägga till transkriptionsbegäran. Är du inloggad?',
	'mwe-timedtext-request-already-done' => 'En transkription av denna video har redan begärts. [$1  Se alla transkriberingsbegäranden]',
);

/** Tamil (தமிழ்)
 * @author Karthi.dr
 * @author Shanmugamp7
 */
$messages['ta'] = array(
	'mwe-timedtext-stage-translate' => 'மொழிபெயர்க்கவும்',
	'mwe-timedtext-file-language' => 'துணைத்தலைப்பு கோப்பு மொழி',
	'mwe-timedtext-upload-text' => 'உரைக்கோப்பை பதிவேற்றவும்',
	'mwe-timedtext-uploading-text' => 'உரைக்கோப்பு பதிவேற்றப்படுகிறது',
	'mwe-timedtext-upload-text-desc-title' => 'ஒரு உரைக்கோப்பை பதிவேற்று',
	'mwe-timedtext-upload-text-desc-help-select' => 'கோப்பின் மொழியைத் தேர்ந்தெடுக்கவும்',
	'mwe-timedtext-back-btn' => 'பின்செல்',
	'mwe-timedtext-textcat-lrc' => 'பாடல் வரிகள்',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'mwe-timedtext-stage-translate' => 'అనువదించండి',
	'mwe-timedtext-select-language' => 'భాషని ఎంచుకోండి',
	'mwe-timedtext-upload-text-done' => 'ఎక్కింపు పూర్తయ్యింది',
	'mwe-timedtext-upload-text-fail-title' => 'ఎక్కింపు విఫలమైంది',
	'mwe-timedtext-back-btn' => 'వెనక్కి',
	'mwe-timedtext-layout' => 'అమరిక',
	'mwe-timedtext-textcat-sub' => 'ఉపశీర్షికలు',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'mwe-timedtext-editor' => 'Inoorasang patnugot ng teksto',
	'mwe-timedtext-stage-transcribe' => 'Ilapat upang mabasa',
	'mwe-timedtext-stage-sync' => 'Isabay',
	'mwe-timedtext-stage-translate' => 'Isalinwika',
	'mwe-timedtext-stage-upload' => 'Ikargang paitaas mula sa katutubong talaksan',
	'mwe-timedtext-select-language' => 'Piliin ang wika',
	'mwe-timedtext-file-language' => 'Wika ng talaksan ng kabahaging pamagat',
	'mwe-timedtext-upload-text' => 'Ikargang paitaas ang talaksan ng teksto',
	'mwe-timedtext-uploading-text' => 'Ikinakargang paitaas ang talaksan ng teksto',
	'mwe-timedtext-upload-text-desc-title' => 'Magkargang paitaas ng isang talaksan ng teksto',
	'mwe-timedtext-upload-text-desc-help' => 'Ang ugnayang-mukha ng talaksan ng pagkakargang-paitaas na teksto ay tumatanggap ng mga talaksang .srt',
	'mwe-timedtext-upload-text-desc-help-browse' => 'Tumingin-tingin sa iyong lokal na kompyuter para sa talaksang .srt na nais mong ikargang paitaas',
	'mwe-timedtext-upload-text-desc-help-select' => 'Piliin ang wika ng talaksan',
	'mwe-timedtext-upload-text-desc-help-review' => 'Suriing muli / baguhin ang nilalaman ng teksto at pagkaraan ay pindutin ang ikargang paitaas upang maidagdag ang teksto',
	'mwe-timedtext-upload-text-preview' => 'Suriing muli ang teksto',
	'mwe-timedtext-upload-text-success' => 'Matagumpay ang pagkakargang papaitaas ng inorasang teksto',
	'mwe-timedtext-upload-text-done' => 'Tapos na ang pagkakargang papaitaas',
	'mwe-timedtext-upload-text-fail-desc' => 'Matagumpay ang pagkakargang papaitaas',
	'mwe-timedtext-upload-text-fail-title' => 'Nabigo ang pagkakargang papaitaas',
	'mwe-timedtext-upload-text-another' => 'Magkarga ng iba pa',
	'mwe-timedtext-upload-text-done-uploading' => 'Natapos na ang pagkakargang papaitaas',
	'mwe-timedtext-back-btn' => 'Bumalik',
	'mwe-timedtext-choose-text' => 'Pumili ng teksto',
	'mwe-timedtext-upload-timed-text' => 'Magdagdag ng kabahaging mga pamagat',
	'mwe-timedtext-loading-text-edit' => 'Ikinakarga ang patnugot ng inoorasang teksto',
	'mwe-timedtext-search' => 'Maghanap ng putol',
	'mwe-timedtext-layout' => 'Kaayusan',
	'mwe-timedtext-layout-ontop' => 'Sa ibabaw ng bidyo',
	'mwe-timedtext-layout-below' => 'Sa ilalim ng bidyo',
	'mwe-timedtext-layout-off' => 'Itago ang kabahaging mga pamagat',
	'mwe-timedtext-loading-text' => 'Ikinakarga ang teksto ...',
	'mwe-timedtext-key-language' => '$1, $2',
	'mwe-timedtext-textcat-cc' => 'Mga paliwanag',
	'mwe-timedtext-textcat-sub' => 'Kabahaging mga pamagat',
	'mwe-timedtext-textcat-tad' => 'Paglalarawan ng naririnig',
	'mwe-timedtext-textcat-ktv' => 'Karaoke',
	'mwe-timedtext-textcat-tik' => 'Teksto ng pampulso',
	'mwe-timedtext-textcat-ar' => 'Masisiglang mga rehiyon',
	'mwe-timedtext-textcat-nb' => 'Paliwanag',
	'mwe-timedtext-textcat-meta' => 'Inorasang metadato',
	'mwe-timedtext-textcat-trx' => 'Sipi ng salin',
	'mwe-timedtext-textcat-lrc' => 'Titik ng awit',
	'mwe-timedtext-textcat-lin' => 'Markang-pantaas ng lingguwistika',
	'mwe-timedtext-textcat-cue' => 'Mga tuldok ng pahiwatig',
	'mwe-timedtext-language-subtitles-for-clip' => '$1 kabahaging mga pamagat para sa putol na: $2',
	'mwe-timedtext-language-no-subtitles-for-clip' => 'Walang natagpuang $1 kabahaging mga pamagat para sa putol na: $2',
	'mwe-timedtext-request-subs' => 'Humiling ng sipi ng salin',
	'mwe-timedtext-no-subs' => 'Walang makukuhang mga bakas ng teksto',
	'mwe-timedtext-request-subs-desc' => 'Magdagdag ng isang kahilingan para sa talaksang ito ng bidyong upang maisulat',
	'mwe-timedtext-request-subs-done' => 'Naidagdag ang kahilingan ng transkripsiyon. [$1 Tingnan ang lahat ng mga hiling ng pagpapasulat]',
	'mwe-timedtext-request-subs-fail' => 'Nabigo sa pagdaragdag ng kahilingan ng pagpapasulat. Nakalagda ka ba?',
	'mwe-timedtext-request-already-done' => 'Nahiling na ang isang transkripsiyon ng bidyong ito. [$1 Tingnan ang lahat ng mga hiling ng pagpapasulat]',
);

/** Ukrainian (українська)
 * @author Тест
 */
$messages['uk'] = array(
	'mwe-timedtext-editor' => 'Редактор субтитрів',
	'mwe-timedtext-stage-translate' => 'Перекласти',
	'mwe-timedtext-stage-upload' => 'Завантажити з локального файлу',
	'mwe-timedtext-select-language' => 'Оберіть мову',
	'mwe-timedtext-upload-text-desc-help-select' => 'Оберіть мову файлу',
	'mwe-timedtext-back-btn' => 'Назад',
	'mwe-timedtext-textcat-ktv' => 'Караоке',
);

/** Urdu (اردو)
 * @author පසිඳු කාවින්ද
 */
$messages['ur'] = array(
	'mwe-timedtext-stage-translate' => 'کا ترجمہ',
	'mwe-timedtext-back-btn' => 'واپس',
	'mwe-timedtext-textcat-sub' => 'رومانیہ',
);

/** Vietnamese (Tiếng Việt)
 * @author පසිඳු කාවින්ද
 */
$messages['vi'] = array(
	'mwe-timedtext-back-btn' => 'Quay lại',
);

/** Walloon (walon)
 * @author Srtxg
 */
$messages['wa'] = array(
	'mwe-timedtext-editor' => "Aspougneu d' tecse sincronijhî",
	'mwe-timedtext-stage-transcribe' => 'Transcrire',
	'mwe-timedtext-stage-sync' => 'Sincronijhî',
	'mwe-timedtext-stage-translate' => 'Ratourner',
	'mwe-timedtext-stage-upload' => 'Eberweter on fitchî locå',
	'mwe-timedtext-select-language' => "Tchoezixhoz l' lingaedje",
	'mwe-timedtext-file-language' => "Lingaedje do fitchî d' dizo-tites",
	'mwe-timedtext-upload-text' => 'Eberweter on fitchî tecse',
	'mwe-timedtext-uploading-text' => 'Eberwetaedje do fitchî tecse',
	'mwe-timedtext-upload-text-desc-title' => 'Eberweter on fitchî tecse',
	'mwe-timedtext-upload-text-desc-help' => "L' eterface d' eberwetaedje di fitchîs tecse acceptêye les fitchîs .srt",
	'mwe-timedtext-upload-text-desc-help-browse' => 'Foytez dins vos ridants locås pol fitchî .srt ki vos vloz eberweter',
	'mwe-timedtext-upload-text-desc-help-select' => "Tchoezixhoz l' lingaedje do fitchî",
	'mwe-timedtext-upload-text-fail-desc' => "L' eberwetaedje a stî comifåt",
	'mwe-timedtext-upload-text-fail-title' => "L' eberwetaedje a fwait berwete",
	'mwe-timedtext-layout-ontop' => 'Sol dizeur do videyo',
	'mwe-timedtext-layout-below' => 'Sol dizo do videyo',
	'mwe-timedtext-layout-off' => 'Catchî les dzo-tites',
	'mwe-timedtext-loading-text' => 'Dji tchedje li tecse...',
	'mwe-timedtext-textcat-cc' => 'Ledjindes',
	'mwe-timedtext-textcat-sub' => 'Dizo-tites',
	'mwe-timedtext-textcat-lrc' => 'Paroles',
	'mwe-timedtext-textcat-lin' => 'Etiketes di lingaedje',
	'mwe-timedtext-language-subtitles-for-clip' => 'Dizo-tites e $1 pol clip: $2',
	'mwe-timedtext-language-no-subtitles-for-clip' => 'Nou dzo-tite $1 di trové pol clip: $2',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'mwe-timedtext-back-btn' => 'צוריק',
	'mwe-timedtext-textcat-cc' => 'באשרייבונגען',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Wilsonmess
 * @author Xiaomingyan
 */
$messages['zh-hans'] = array(
	'mwe-timedtext-stage-transcribe' => '字幕',
	'mwe-timedtext-stage-sync' => '同步',
	'mwe-timedtext-stage-translate' => '翻译',
	'mwe-timedtext-stage-upload' => '从本地上传',
	'mwe-timedtext-select-language' => '选择语言',
	'mwe-timedtext-file-language' => '字幕语言',
	'mwe-timedtext-upload-text' => '上传文本文件',
	'mwe-timedtext-uploading-text' => '正在上传文本文件',
	'mwe-timedtext-upload-text-desc-help-browse' => '浏览本机以查阅您想要上传的.srt文件',
	'mwe-timedtext-upload-text-desc-help-select' => '选择文件的语言',
	'mwe-timedtext-upload-text-done' => '上传完成',
	'mwe-timedtext-upload-text-fail-desc' => '未能成功上传',
	'mwe-timedtext-upload-text-fail-title' => '上传失败',
	'mwe-timedtext-upload-text-another' => '上载其他',
	'mwe-timedtext-upload-text-done-uploading' => '上传完成',
	'mwe-timedtext-back-btn' => '返回',
	'mwe-timedtext-choose-text' => '选择文字',
	'mwe-timedtext-upload-timed-text' => '添加字幕',
	'mwe-timedtext-search' => '搜索剪辑',
	'mwe-timedtext-layout' => '布局',
	'mwe-timedtext-layout-off' => '隐藏字幕',
	'mwe-timedtext-loading-text' => '正在读取文本……',
	'mwe-timedtext-textcat-cc' => '标题',
	'mwe-timedtext-textcat-sub' => '副标题',
	'mwe-timedtext-textcat-ktv' => '卡拉OK',
	'mwe-timedtext-textcat-nb' => '注解',
	'mwe-timedtext-textcat-trx' => '字幕',
	'mwe-timedtext-textcat-lrc' => '歌词',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Mark85296341
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'mwe-timedtext-stage-transcribe' => '字幕',
	'mwe-timedtext-stage-sync' => '同步',
	'mwe-timedtext-stage-translate' => '翻譯',
	'mwe-timedtext-stage-upload' => '從本地上傳',
	'mwe-timedtext-select-language' => '選擇語言',
	'mwe-timedtext-file-language' => '字幕語言',
	'mwe-timedtext-upload-text' => '上傳文本文件',
	'mwe-timedtext-uploading-text' => '正在上傳文本文件',
	'mwe-timedtext-upload-text-desc-help-browse' => '瀏覽本機以查閱您想要上傳的.srt文件',
	'mwe-timedtext-upload-text-desc-help-select' => '選擇文件的語言',
	'mwe-timedtext-upload-text-done' => '上傳完成',
	'mwe-timedtext-upload-text-fail-desc' => '未能成功上傳',
	'mwe-timedtext-upload-text-fail-title' => '上傳失敗',
	'mwe-timedtext-upload-text-another' => '上載其他',
	'mwe-timedtext-upload-text-done-uploading' => '上傳完成',
	'mwe-timedtext-back-btn' => '返回',
	'mwe-timedtext-choose-text' => '選擇文字',
	'mwe-timedtext-upload-timed-text' => '添加字幕',
	'mwe-timedtext-search' => '搜索剪輯',
	'mwe-timedtext-layout' => '布局',
	'mwe-timedtext-layout-off' => '隱藏字幕',
	'mwe-timedtext-loading-text' => '正在讀取文本……',
	'mwe-timedtext-textcat-cc' => '標題',
	'mwe-timedtext-textcat-sub' => '副標題',
	'mwe-timedtext-textcat-ktv' => '卡拉OK',
	'mwe-timedtext-textcat-nb' => '註解',
	'mwe-timedtext-textcat-trx' => '字幕',
	'mwe-timedtext-textcat-lrc' => '歌詞',
);
