<?php
/**
 * @author         WebMaster <hello@secdating.atwebpages.com>
 * @copyright      (c) 2019, WebMaster. All Rights Reserved.
 * @license        GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package        PH7 / App / System / Module / SMS Verification / Inc / Class
 */

namespace PH7;

class SmsProvider
{
    /** @var string */
    protected $sSenderNumber;

    /** @var string */
    protected $sApiToken;

    /** @var string */
    protected $sApiId;

    /**
     * @param string $sSenderNumber
     * @param string $sApiToken
     * @param string|null $sApiId At the moment, this parameter is only used by Twilio API.
     */
    public function __construct($sSenderNumber, $sApiToken, $sApiId = null)
    {
        $this->sSenderNumber = $sSenderNumber;
        $this->sApiToken = $sApiToken;
        $this->sApiId = $sApiId;
    }
}
