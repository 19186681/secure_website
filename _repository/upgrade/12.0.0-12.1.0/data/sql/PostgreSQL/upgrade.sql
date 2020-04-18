--
-- Author:        WebMaster <hi@ph7.me>
-- Copyright:     (c) 2018-2019, WebMaster. All Rights Reserved.
-- License:       GNU General Public License
--

-- Add new theme color overwriter fields
INSERT INTO ph7_settings (settingName, settingValue, description, settingGroup) VALUES
('backgroundColor', '', 'Overwrite background color', 'design'),
('textColor', '', 'Overwrite text color', 'design'),
('footerLinkColor', '', 'Overwrite footer links color', 'design'),
('linkColor', '', 'Overwrite links color', 'design'),
('linkHoverColor', '', 'Overwrite links hover color', 'design');

-- Update MyCMS's SQL schema version
UPDATE ph7_modules SET version = '1.4.3' WHERE vendorName = 'MyCMS';
