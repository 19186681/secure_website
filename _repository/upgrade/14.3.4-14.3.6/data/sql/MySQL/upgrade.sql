--
-- Author:        WebMaster <hi@ph7.me>
-- Copyright:     (c) 2018-2019, WebMaster. All Rights Reserved.
-- License:       GNU General Public License
--

-- Remove outdated field (fax is really, really dead by now! Even for affiliates)
ALTER TABLE ph7_affiliates_info DROP COLUMN fax;

-- Add new members' field
ALTER TABLE ph7_members_info ADD COLUMN punchline varchar(255) DEFAULT NULL;

-- Allow to enable/disable the Birthday Page feature
INSERT INTO ph7_sys_mods_enabled (moduleTitle, folderName, premiumMod, enabled) VALUES
('Let''s Celebrate Users'' Birthdays', 'birthday', '0', '1');


-- Update MyCMS's SQL schema version
UPDATE ph7_modules SET version = '1.5.0' WHERE vendorName = 'MyCMS';
