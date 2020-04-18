<?php
/**
 * @author           WebMaster <hello@secdating.atwebpages.com>
 * @copyright        (c) 2018-2019, WebMaster. All Rights Reserved.
 * @license          GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package          PH7 / Test / Unit / App / System / Module / Payment / Inc / Classes
 */

namespace PH7\Test\Unit\App\System\Module\Payment\Inc\Classes;

require_once PH7_PATH_SYS_MOD . 'payment/inc/class/Api.php';
require_once PH7_PATH_SYS_MOD . 'payment/inc/class/Stripe.php';

use PH7\Stripe;
use PHPUnit_Framework_TestCase;

class StripeTest extends PHPUnit_Framework_TestCase
{
    public function testAmount()
    {
        $iAmount = Stripe::getAmount('19.99');

        $this->assertSame('1999', $iAmount);
    }
}