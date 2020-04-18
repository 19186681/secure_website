--
-- Author:        WebMaster <x19186681@student.ncirl.ie>
-- Copyright:     (c) 2013-2019, WebMaster. All Rights Reserved.
-- License:       GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
--

ALTER TABLE pH7_AdminsAttemptsLogin ADD UNIQUE KEY (ip);
ALTER TABLE pH7_MembersAttemptsLogin ADD UNIQUE KEY (ip);
ALTER TABLE pH7_AffiliatesLogLogin ADD UNIQUE KEY (ip);
