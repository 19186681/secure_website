--
-- Author:        WebMaster <hi@ph7.me>
-- Copyright:     (c) 2018-2019, WebMaster. All Rights Reserved.
-- License:       GNU General Public License
--

-- Add field to give option for date-picker calendar or just age range
INSERT INTO ph7_settings (settingName, settingValue, description, settingGroup) VALUES
('isUserAgeRangeField', 1, '0 to disable or 1 to enable', 'registration');


-- Update MyCMS's SQL schema version
UPDATE ph7_modules SET version = '1.4.7' WHERE vendorName = 'MyCMS';
