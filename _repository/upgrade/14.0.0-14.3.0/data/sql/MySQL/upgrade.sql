--
-- Author:        WebMaster <hi@ph7.me>
-- Copyright:     (c) 2018-2019, WebMaster. All Rights Reserved.
-- License:       GNU General Public License
--

-- Remove field that is no longer used
ALTER TABLE ph7_memberships DROP COLUMN orderId;
ALTER TABLE ph7_members_info DROP COLUMN street;
ALTER TABLE ph7_affiliates_info DROP COLUMN street;


-- Update MyCMS's SQL schema version
UPDATE ph7_modules SET version = '1.4.8' WHERE vendorName = 'MyCMS';
