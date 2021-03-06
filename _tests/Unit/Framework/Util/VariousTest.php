<?php
/**
 * @author           WebMaster <hello@secdating.atwebpages.com>
 * @copyright        (c) 2017-2019, WebMaster. All Rights Reserved.
 * @license          GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package          PH7 / Test / Unit / Framework / Util
 */

namespace PH7\Test\Unit\Framework\Util;

use PH7\Framework\Util\Various;
use PHPUnit_Framework_TestCase;

class VariousTest extends PHPUnit_Framework_TestCase
{
    public function testGenerateRandom()
    {
        $iStringLength = strlen(Various::genRnd('WebMaster-Henry Random :D', 8));
        $this->assertSame(8, $iStringLength);
    }

    public function testPaddingString()
    {
        $this->assertSame('abc def ghiabc def ghiabc def ghiabc def', Various::padStr('abc def ghi', 40));
    }

    public function testGenerateRandomWord()
    {
        $iStringLength = strlen(Various::genRndWord(10));
        $this->assertSame(10, $iStringLength);
    }
}
