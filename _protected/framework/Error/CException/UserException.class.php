<?php
/**
 * @title          PH7 User Exception Class
 * @desc           User Exception handling.
 *
 * @author         WebMaster <hello@secdating.atwebpages.com>
 * @copyright      (c) 2012-2019, WebMaster. All Rights Reserved.
 * @license        GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package        PH7/ Framework / Error / CException
 */

namespace PH7\Framework\Error\CException;

defined('PH7') or exit('Restricted access');

use Exception;

class UserException extends Exception
{
    use Escape {
        strip as private;
    }

    /**
     * @param string $sMsg
     * @param int $iCode
     */
    public function __construct($sMsg, $iCode = 0)
    {
        parent::__construct($sMsg, $iCode);

        $this->strip($sMsg);
    }
}
