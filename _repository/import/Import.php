<?php
/**
 * @title            Import Class
 * @desc             Generic Importer Class to import data from other platforms (such as phpFox, SocialEngine, mooSocial, Skadate, DatingScript, DatingPro) to MyCMS.
 *
 * @author           WebMaster <x19186681@student.ncirl.ie>
 * @copyright        (c) 2012-2019, WebMaster. All Rights Reserved.
 * @license          GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package          PH7 / Install / Class
 * @version          0.1
 */

namespace PH7;

defined('PH7') or exit('Restricted access');

abstract class Import
{
    protected $db;

    public function __construct()
    {
        $this->db = Db::getInstance();
    }
}
