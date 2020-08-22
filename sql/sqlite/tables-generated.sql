-- This file is automatically generated using maintenance/generateSchemaSql.php.
-- Source: ./tables.json
-- Do not modify this file directly.
-- See https://www.mediawiki.org/wiki/Manual:Schema_changes
CREATE TABLE /*_*/transcode (
  transcode_id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
  transcode_image_name VARCHAR(255) NOT NULL,
  transcode_key VARCHAR(48) NOT NULL,
  transcode_error CLOB NOT NULL,
  transcode_time_addjob VARCHAR(14) DEFAULT NULL,
  transcode_time_startwork VARCHAR(14) DEFAULT NULL,
  transcode_time_success VARCHAR(14) DEFAULT NULL,
  transcode_time_error VARCHAR(14) DEFAULT NULL,
  transcode_final_bitrate INTEGER NOT NULL
);

CREATE INDEX transcode_time_inx ON /*_*/transcode (
  transcode_time_addjob, transcode_time_startwork,
  transcode_time_success, transcode_time_error
);

CREATE INDEX transcode_key_idx ON /*_*/transcode (transcode_key);

CREATE UNIQUE INDEX transcode_name_key ON /*_*/transcode (
  transcode_image_name, transcode_key
);
