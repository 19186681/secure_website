<?php
/**
 * @title            Config Class
 * @desc             Loading and management config files.
 *
 * @author           WebMaster <hello@secdating.atwebpages.com>
 * @copyright        (c) 2017-2019, WebMaster. All Rights Reserved.
 * @license          GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package          PH7 / Framework / Config
 */

namespace PH7\Framework\Config;

use PH7\Framework\File\IOException;

defined('PH7') or exit('Restricted access');

class FileNotFoundException extends IOException
{
    const APP_FILE = 1;
    const SYS_FILE = 2;
}
