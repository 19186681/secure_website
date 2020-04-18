<?php
/**
 * @title          Index
 * @desc           Index file for public root.
 */

namespace PH7;

define('PH7', 1);

use RuntimeException;

require __DIR__ . '/WebsiteChecker.php';

$oSiteChecker = new WebsiteChecker();

try {
    $oSiteChecker->checkPhpVersion();
    if (!$oSiteChecker->doesConfigFileExist()) {
        if ($oSiteChecker->doesInstallFolderExist()) {
            $oSiteChecker->clearBrowserCache();
            $oSiteChecker->moveToInstaller();
        } else {
            echo $oSiteChecker->getNoConfigFoundMessage();
        }
        exit;
    }
} catch (RuntimeException $oExcept) {
    echo $oExcept->getMessage();
    exit;
}

require __DIR__ . '/_constants.php';
require PH7_PATH_APP . 'Bootstrap.php';

$oApp = Bootstrap::getInstance();
$oApp->setTimezoneIfNotSet();

ob_start();
$oApp->run();
ob_end_flush();
