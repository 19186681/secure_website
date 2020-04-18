--
-- Author:        WebMaster <hi@ph7.me>
-- Copyright:     (c) 2018-2019, WebMaster. All Rights Reserved.
-- License:       GNU General Public License
--

CREATE SEQUENCE ph7_block_countries_seq;

CREATE TABLE IF NOT EXISTS ph7_block_countries (
  countryId smallint check (countryId > 0) NOT NULL DEFAULT NEXTVAL ('ph7_block_countries_seq'),
  countryCode char(2) NOT NULL,
  PRIMARY KEY (countryId),
  UNIQUE (countryCode)
);

ALTER SEQUENCE ph7_block_countries_seq RESTART WITH 1;


-- Update MyCMS's SQL schema version
UPDATE ph7_modules SET version = '1.4.4' WHERE vendorName = 'MyCMS';
