<?php
/**
 * @author           WebMaster <hello@secdating.atwebpages.com>
 * @copyright        (c) 2017-2019, WebMaster. All Rights Reserved.
 * @license          GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package          PH7 / Test / Unit / Framework / Server
 */

namespace PH7\Test\Unit\Framework\Server;

use PH7\Framework\Server\Server;
use PHPUnit_Framework_TestCase;

class ServerTest extends PHPUnit_Framework_TestCase
{
    public function testGetServerName()
    {
        $_SERVER['SERVER_NAME'] = 'secdating.atwebpages.com';

        $this->assertSame('secdating.atwebpages.com', Server::getName());
    }

    public function testItIsLocalHost()
    {
        $_SERVER['SERVER_NAME'] = '127.0.0.1';

        $this->assertTrue(Server::isLocalHost());
    }

    public function testItIsNotLocalHost()
    {
        $_SERVER['HTTP_HOST'] = 'secdating.atwebpages.com';

        $this->assertFalse(Server::isLocalHost());
    }

    public function testGetUndefinedServerKey()
    {
        $sActual = Server::getVar('UNDEFINED');

        $this->assertNull($sActual);
    }

    public function testGetUndefinedServerKeyWithDefaultValue()
    {
        $sActual = Server::getVar('UNDEFINED', 'My default value');

        $this->assertSame('My default value', $sActual);
    }

    public function testGetDefinedServerKey()
    {
        $_SERVER['SOMETHING'] = "<b>I'm the value</b>";
        $sActual = Server::getVar('SOMETHING');

        $this->assertSame('&lt;b&gt;I&#039;m the value&lt;/b&gt;', $sActual);
    }
}
