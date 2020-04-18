<?php


namespace PH7\Framework\Pattern;

defined('PH7') or exit('Restricted access');

trait Singleton
{
    use Statik;

    /**
     * @staticvar object $oInstance
     */
    protected static $oInstance = null;

    /**
     * Get instance of class.
     *
     * @return self Returns the instance class or create initial instance of the class.
     */
    public static function getInstance()
    {
        return null === static::$oInstance ? static::$oInstance = new static : static::$oInstance;
    }

    /**
     * Directly call "static::getInstance()" method when the object is called as a function.
     */
    public function __invoke()
    {
        return static::getInstance();
    }

    /**
     * Private serialize/unserialize method to prevent serializing/unserializing.
     */
    private function __wakeup()
    {
    }

    private function __sleep()
    {
    }
}
