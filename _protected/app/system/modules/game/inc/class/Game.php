<?php
/**
 * @author         WebMaster <hello@secdating.atwebpages.com>
 * @copyright      (c) 2017-2019, WebMaster. All Rights Reserved.
 * @license        GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package        PH7 / App / System / Module / Game / Inc / Class
 */

namespace PH7;

use PH7\Framework\Cache\Cache;

class Game
{
    public static function clearCache()
    {
        (new Cache)->start(GameModel::CACHE_GROUP, null, null)->clear();
    }
}
