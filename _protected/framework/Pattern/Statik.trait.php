<?php
namespace PH7\Framework\Pattern;

defined('PH7') or exit('Restricted access');

/**
 * "Statik" and not "Static" because "static" is a reseved PHP keyword.
 */
trait Statik
{
    /**
     * Private Constructor & Cloning to prevent direct creation of object and blocking cloning.
     */
    final private function __construct()
    {
    }

    final private function __clone()
    {
    }
}
