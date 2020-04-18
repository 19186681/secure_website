<?php


namespace PH7\Framework\Pattern;

defined('PH7') or exit('Restricted access');

use PH7\Framework\Error\CException\PH7RuntimeException;
use ReflectionClass;

trait Factory
{
    use Statik;

    /**
     * Loading a class.
     *
     * @return object Return the instance of the class.
     *
     * @throws PH7RuntimeException If the class is not found or if it has not been defined.
     * @throws \ReflectionException If the class doesn't exist.
     */
    public static function load(...$aArgs)
    {
        $sClass = static::class;

        if (class_exists($sClass)) {
            return (new ReflectionClass($sClass))->newInstanceArgs($aArgs);
        }

        throw new PH7RuntimeException(
            sprintf('"%s" class was not found or is not defined.', $sClass)
        );
    }
}