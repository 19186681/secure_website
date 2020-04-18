--
-- Author:        WebMaster <hello@secdating.atwebpages.com>
-- Copyright:     (c) 2019, WebMaster. All Rights Reserved.
-- License:       GNU General Public License
--

-- Add heading color overwriter fields
INSERT INTO ph7_settings (settingName, settingValue, description, settingGroup) VALUES
('heading1Color', '', 'Override H1 color. Leave empty to disable', 'design'),
('heading2Color', '', 'Override H2 color. Leave empty to disable', 'design'),
('heading3Color', '', 'Override H3 color. Leave empty to disable', 'design');


-- Update MyCMS's SQL schema version
UPDATE ph7_modules SET version = '1.5.7' WHERE vendorName = 'MyCMS';
