--
-- Author:        WebMaster <hi@ph7.me>
-- Copyright:     (c) 2018-2019, WebMaster. All Rights Reserved.
-- License:       GNU General Public License
--

-- Add Progressive Web App support
INSERT INTO ph7_sys_mods_enabled (moduleTitle, folderName, premiumMod, enabled) VALUES
('Progressive Web App (https required)', 'pwa', '0', '0');


-- Update MyCMS's SQL schema version
UPDATE ph7_modules SET version = '1.5.1' WHERE vendorName = 'MyCMS';
