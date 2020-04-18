<?php

namespace PH7\Framework\Loader;

defined('PH7') or exit('Restricted access');

use PH7\Framework\Pattern\Singleton;
use function PH7\html_body;

/**
 * We include the Singleton trait before use, because at this stage the class can not load the trait automatically.
 */
require_once PH7_PATH_FRAMEWORK . 'Pattern/Statik.trait.php';
require_once PH7_PATH_FRAMEWORK . 'Pattern/Singleton.trait.php';

final class Autoloader
{
    const FRAMEWORK_NAMESPACE = 'PH7\Framework';
    const COMPOSER_AUTOLOAD_FULL_PATH = PH7_PATH_PROTECTED . 'vendor/autoload.php';
    const INFO_INSTALL_COMPOSER_LINK = '';
    const DOWNLOAD_SOFTWARE_LINK = '';

    /**
     * Make the class singleton by importing the appropriate trait.
     */
    use Singleton;

    /**
     * We do not put a "__construct" and "__clone" "private" because it is already done in \PH7\Framework\Pattern\Statik trait which is included in \PH7\Framework\Pattern\Singleton trait.
     */


    /**
     * Autoloader Class.
     *
     * @return void
     */
    public function init()
    {
        // Specify the extensions that may be loaded
        spl_autoload_extensions('.class.php, .interface.php, .trait.php');

        // Register the loader methods
        spl_autoload_register([__CLASS__, 'loadClass']);

        // Include Composer libraries (GeoIp2, Swift, Stripe, ...)
        $this->loadComposerLoader();
    }

    /**
     * Autoload Classes.
     *
     * @param string $sClass
     *
     * @return void
     */
    private function loadClass($sClass)
    {
        $sClass = $this->clean($sClass);

        switch (true) {
            /***** To include the libraries *****/

            // To include Classes
            case is_file(PH7_PATH_FRAMEWORK . $sClass . '.class.php'):
                $sFile = PH7_PATH_FRAMEWORK . $sClass . '.class.php';
                break;

            // To include Interfaces
            case is_file(PH7_PATH_FRAMEWORK . $sClass . '.interface.php'):
                $sFile = PH7_PATH_FRAMEWORK . $sClass . '.interface.php';
                break;

            // To include Traits
            case is_file(PH7_PATH_FRAMEWORK . $sClass . '.trait.php'):
                $sFile = PH7_PATH_FRAMEWORK . $sClass . '.trait.php';
                break;


            /***** To include third-party libraries that does not have the same naming convention than MyCMS *****/

            // Include PFBC (PHP Form Builder Class) library
            case is_file(PH7_PATH_FRAMEWORK . 'Layout/Form/Engine/' . $sClass . '.class.php'):
                $sFile = PH7_PATH_FRAMEWORK . 'Layout/Form/Engine/' . $sClass . '.class.php';
                break;

            default:
                return; // Stop it
        }

        require_once $sFile;
    }

    /**
     * For all classes, hack to remove the namespace, slash and backslash.
     *
     * @param string The class name to clean.
     *
     * @return string The class cleaned.
     */
    private function clean($sClass)
    {
        return str_replace([self::FRAMEWORK_NAMESPACE, '\\', '//'], ['/', '/', ''], $sClass);
    }

    /**
     * @return void
     */
    private function loadComposerLoader()
    {
        if (!is_file(self::COMPOSER_AUTOLOAD_FULL_PATH)) {
            $this->showComposerNotInstalledPage();
            exit;
        }

        require_once self::COMPOSER_AUTOLOAD_FULL_PATH;
    }

    /**
     * Display a message if composer isn't installed.
     *
     * @return void
     */
    private function showComposerNotInstalledPage()
    {
        $sInstallComposerLink = self::INFO_INSTALL_COMPOSER_LINK;
        $sDownloadLink = self::DOWNLOAD_SOFTWARE_LINK;
        
        echo html_body('You need to run Composer');
    }
}
