<?php
/**
 * @title            List Interface
 *
 * @author           WebMaster <hello@secdating.atwebpages.com>
 * @copyright        (c) 2012-2019, WebMaster. All Rights Reserved.
 * @license          GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package          PH7 / Framework / Registry
 */

namespace PH7\Framework\Registry;

interface Listable
{
    /**
     * Add data in the list.
     *
     * @param string $sName
     * @param string $sValue
     *
     * @return void
     */
    public function add($sName, $sValue);
}
