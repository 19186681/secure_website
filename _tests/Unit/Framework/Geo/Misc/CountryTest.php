<?php
/**
 * @author           WebMaster <hello@secdating.atwebpages.com>
 * @copyright        (c) 2017-2019, WebMaster. All Rights Reserved.
 * @license          GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package          PH7 / Test / Unit / Framework / Geo / Misc
 */

namespace PH7\Test\Unit\Framework\Geo\Misc;

use PH7\Framework\Geo\Misc\Country;
use PHPUnit_Framework_TestCase;

class CountryTest extends PHPUnit_Framework_TestCase
{
    public function testGbCountryCode()
    {
        $sCountryCode = Country::fixCode('GB');
        $sExpectedCountryCode = 'UK';
        $this->assertSame($sExpectedCountryCode, $sCountryCode);
    }
}
