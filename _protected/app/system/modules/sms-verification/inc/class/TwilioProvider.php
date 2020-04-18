<?php
/**
 * @author         WebMaster <hello@secdating.atwebpages.com>
 * @copyright      (c) 2019, WebMaster. All Rights Reserved.
 * @license        GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package        PH7 / App / System / Module / SMS Verification / Inc / Class
 */

namespace PH7;

use Twilio\Rest\Client;

class TwilioProvider extends SmsProvider implements SmsProvidable
{
    /**
     * {@inheritdoc}
     */
    public function send($sPhoneNumber, $sTextMessage)
    {
        $oClient = new Client($this->sApiId, $this->sApiToken);

        $oMessage = $oClient->messages->create(
            $sPhoneNumber,
            [
                'from' => $this->sSenderNumber,
                'body' => $sTextMessage
            ]
        );

        return strlen($oMessage->sid) > 1;
    }
}
