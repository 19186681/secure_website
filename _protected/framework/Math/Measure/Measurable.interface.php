<?php
/**
 * @title          Measure Interface
 *
 * @author         WebMaster <hello@secdating.atwebpages.com>
 * @copyright      (c) 2013-2019, WebMaster. All Rights Reserved.
 * @license        GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package        PH7 / Framework / Math / Measure
 * @version        1.0
 */

namespace PH7\Framework\Math\Measure;

defined('PH7') or exit('Restricted access');

interface Measurable
{
    /**
     * Get the measure.
     *
     * @return mixed
     */
    public function get();
}
