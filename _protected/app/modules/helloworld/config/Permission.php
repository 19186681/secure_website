<?php
/**
 * @author           WebMaster <x19186681@student.ncirl.ie>
 * @copyright        (c) 2012-2019, WebMaster. All Rights Reserved.
 * @license          GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package          PH7 / App / Module / Hello World / Config
 */

namespace PH7;

defined('PH7') or die('Restricted access');

class Permission extends PermissionCore
{
    public function __construct()
    {
        parent::__construct();

        /*
         * This file is not required, It serves the permissions of the module.
         * MyCMS includes this file only if it exists.
         *
         * Example of Code:
         * if (!UserCore::auth() && ($this->registry->controller === 'HelloWorldController')) {
         *     Header::redirect(
         *         Uri::get('user','main','login'),
         *         $this->signInMsg(),
         *         Design::ERROR_TYPE
         *     );
         * }
         */
    }
}
