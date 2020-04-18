<?php
/**
 * @author         WebMaster <hello@secdating.atwebpages.com>
 * @copyright      (c) 2015-2019, WebMaster. All Rights Reserved.
 * @license        GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package        PH7 / App / System / Module / MyCMS Helper / Model
 */

namespace PH7;

use PH7\Framework\Mvc\Model\DbConfig;

class ValidateSiteModel extends ValidateSiteCoreModel
{
    /**
     * Set a site validated/unvalidated.
     *
     * @param int $iStatus Set "1" to validate the site or "0" to unvalidated it. Default: 1
     *
     * @return int 1 on success.
     */
    public function set($iStatus = 1)
    {
        return DbConfig::setSetting($iStatus, 'isSiteValidated');
    }
}
