<?php
/**
 * @author         WebMaster <hello@secdating.atwebpages.com>
 * @copyright      (c) 2019, WebMaster. All Rights Reserved.
 * @license        GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package        PH7 / App / System / Module / Map / Inc / Class
 */

namespace PH7;

use PH7\Framework\Geo\Map\Map as GeoMap;
use PH7\Framework\Mvc\Model\DbConfig;
use stdClass;

defined('PH7') or exit('Restricted access');

class Map
{
    const COUNTRY_CODE_LENGTH = 2;
    const MAX_COUNTRY_LENGTH = 50;
    const MAX_CITY_LENGTH = 50;

    /**
     * @param string $sCountryCode
     *
     * @return bool
     */
    public static function isCountryCodeTooLong($sCountryCode)
    {
        return strlen($sCountryCode) !== self::COUNTRY_CODE_LENGTH;
    }
}
