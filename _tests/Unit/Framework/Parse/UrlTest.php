<?php
/**
 * @author           WebMaster <hello@secdating.atwebpages.com>
 * @copyright        (c) 2017-2019, WebMaster. All Rights Reserved.
 * @license          GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package          PH7 / Test / Unit / Framework / Config
 */

namespace PH7\Test\Unit\Framework\Parse;

use PH7\Framework\Parse\Url as UrlParser;
use PHPUnit_Framework_TestCase;

class UrlTest extends PHPUnit_Framework_TestCase
{
    public function testClean()
    {
        $sUrl = 'https://secdating.atwebpages.com/my-route & the new_2£POST!';
        $sExpected = 'https//ph7cmscom/my-route-&-the-new_2-post';

        $this->assertSame($sExpected, UrlParser::clean($sUrl));
    }

    /**
     * @param string $sActualUrl
     * @param string $sExpectedUrl
     *
     * @dataProvider urlsNamesProvider
     */
    public function testName($sActualUrl, $sExpectedUrl)
    {
        $this->assertSame($sExpectedUrl, UrlParser::name($sActualUrl));
    }

    /**
     * @return array
     */
    public function urlsNamesProvider()
    {
        return [
            ['https://secdating.atwebpages.com', 'Ph7cms'],
            ['https://secdating.atwebpages.com/dating-business-by-steps/', 'secdating.atwebpages.com/dating-business-by-steps/'],
            ['https://www.secdating.atwebpages.com?myparam=value-foo-bar', 'secdating.atwebpages.com?myparam=value-foo-bar']
        ];
    }
}
