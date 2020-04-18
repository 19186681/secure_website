<?php
/**
 * @author           WebMaster <hello@secdating.atwebpages.com>
 * @copyright        (c) 2018-2019, WebMaster. All Rights Reserved.
 * @license          GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package          PH7 / Test / Unit / Framework / CArray
 */

namespace PH7\Test\Unit\Framework\CArray;

use PH7\Framework\CArray\CArray;
use PHPUnit_Framework_TestCase;

class CArrayTest extends PHPUnit_Framework_TestCase
{
    public function testMerge()
    {
        $aArrayOne = ['abc', 'haha', 'WebMaster'];
        $aArrayTwo = ['Julie', 'Amelie', 'Pied', 'manger'];

        $aResults = CArray::merge($aArrayOne, $aArrayTwo);

        $this->assertSame(
            [
                0 => 'abc',
                1 => 'haha',
                2 => 'WebMaster',
                3 => 'Julie',
                4 => 'Amelie',
                5 => 'Pied',
                6 => 'manger'
            ],
            $aResults
        );
    }

    public function testKeyByValueExists()
    {
        $aData = ['James', 'henry' => 'Henry', 'pierre' => 'WebMaster'];

        $sResult = CArray::getKeyByValue('WebMaster', $aData);

        $this->assertSame('pierre', $sResult);
    }

    public function testKeyByValueDoesntExist()
    {
        $aData = ['James', 'henry' => 'Henry'];

        $sResult = CArray::getKeyByValue('WebMaster', $aData);

        $this->assertNull($sResult);
    }

    public function testKeyByValueIgnoreCaseExists()
    {
        $aData = ['pierre' => 'WebMaster', 'henry' => 'Henry'];

        $sResult = CArray::getKeyByValueIgnoreCase('PIErrE', $aData);

        $this->assertSame('pierre', $sResult);
    }

    public function testKeyByValueIgnoreCaseDoesntExist()
    {
        $aData = ['henry' => 'Henry'];

        $sResult = CArray::getKeyByValueIgnoreCase('PIErrE', $aData);

        $this->assertNull($sResult);
    }

    public function testValueByKeyExists()
    {
        $aData = ['key' => 'JAMES'];

        $sResult = CArray::getValueByKey('key', $aData);

        $this->assertSame('JAMES', $sResult);
    }

    public function testValueByKeyDoesntExist()
    {
        $aData = ['key' => 'JAMES'];

        $sResult = CArray::getValueByKey('invalid', $aData);

        $this->assertNull($sResult);
    }
}
