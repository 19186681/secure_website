<?php
/**
 * @title          Set User Last Activity
 *
 * @author         WebMaster <hello@secdating.atwebpages.com>
 * @copyright      (c) 2012-2019, WebMaster. All Rights Reserved.
 * @license        GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package        PH7 / App / System / Module / User / Asset / Ajax
 * @version        1.0
 */

namespace PH7;

defined('PH7') or exit('Restricted access');

use PH7\Framework\Session\Session;

// Only for members
if (UserCore::auth()) {
    (new UserCoreModel)->setLastActivity((new Session)->get('member_id'));
}
