<?php
/**
 * @author         WebMaster <hello@secdating.atwebpages.com>
 * @copyright      (c) 2017-2019, WebMaster. All Rights Reserved.
 * @license        GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package        PH7 / App / System / Module / Friend / Config
 */

namespace PH7;

defined('PH7') or exit('Restricted access');

class Permission extends PermissionCore
{
    public function __construct()
    {
        parent::__construct();

        if (!UserCore::auth() && $this->registry->controller === 'FriendController' &&
            $this->registry->action === 'mutual') {
            $this->signUpRedirect();
        }
    }
}
