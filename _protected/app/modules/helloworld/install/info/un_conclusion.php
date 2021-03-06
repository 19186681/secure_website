<?php
/**
 * @author         WebMaster <x19186681@student.ncirl.ie>
 * @copyright      (c) 2012-2019, WebMaster. All Rights Reserved.
 * @license        GNU General Public License <http://www.gnu.org/licenses/gpl.html>
 * @package        PH7 / App / Module / Hello World / Install / Info
 */

namespace PH7;

defined('PH7') or exit('Restricted access');

/* Uninstall Conclusion */

// Default content values
$sHtml = '';

/*** Begin Contents ***/
$sHtml .= '<p>' . t('The module has been successfully uninstalled.') . '</p>';
$sHtml .= '<p>' . t('Thank you!') . '</p>';
/*** End Contents ***/

// Output!
return $sHtml;
