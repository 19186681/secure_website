--
-- Author:        WebMaster <hi@ph7.me>
-- Copyright:     (c) 2018-2019, WebMaster. All Rights Reserved.
-- License:       GNU General Public License
--

-- Remove unnecessary table
DROP TABLE ph7_license;


-- Update MyCMS's SQL schema version
UPDATE ph7_modules SET version = '1.4.6' WHERE vendorName = 'MyCMS';
