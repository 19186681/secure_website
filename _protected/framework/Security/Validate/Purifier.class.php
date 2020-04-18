<?php
/**
 * @title            Purifer Class
 *
 * @author           WebMaster <hello@secdating.atwebpages.com>
 * @copyright        (c) 2013-2019, WebMaster. All Rights Reserved.
 * @license          GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package          PH7 / Framework / Security / Validate
 */

namespace PH7\Framework\Security\Validate;

defined('PH7') or exit('Restricted access');

/*
 * In developing!
 * In the near future it is possible that this class overrides the Filter class to no longer depend on CodeIgniter.
 * You can contribute too! => https://github.com/19186681/secure_website
 */

class Purifer extends Xss
{
    /**
     * Clean a string against XSS vulnerabilities.
     *
     * @param string|array $mStr Value to clean.
     *
     * @return string|array Value cleaned.
     */
    public function xssClean($mStr)
    {
        return is_array($mStr) ? $this->arrayClean($mStr) : $this->clean($mStr);
    }
}