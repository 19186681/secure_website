<?php
/**
 * @author         WebMaster <x19186681@student.ncirl.ie>
 * @copyright      (c) 2013-2019, WebMaster. All Rights Reserved.
 * @license        GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 */

namespace PH7;
defined('PH7') or exit('Restricted access');

// Default contents value
$sHtml = '';

/*** Begin Contents ***/

$sHtml .= '<p>' . t('Done!') . '<br />';
$sHtml .= t('Please also delete all the cache files for the changes to take effect.') . '</p>';

/*** End Contents ***/

// Output!
return $sHtml;
