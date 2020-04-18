<?php
/**
 * @author         WebMaster <hello@secdating.atwebpages.com>
 * @copyright      (c) 2019, WebMaster. All Rights Reserved.
 * @license        GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package        PH7 / App / System / Module / SMS Verification / Inc / Class
 */

namespace PH7;

interface SmsProvidable
{
    /**
     * @param string $sPhoneNumber
     * @param string $sTextMessage
     *
     * @return bool
     */
    public function send($sPhoneNumber, $sTextMessage);
}
