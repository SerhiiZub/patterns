<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 18.08.17
 * Time: 17:48
 */

namespace DesignPatterns\Structural\Registry;


use \InvalidArgumentException;

abstract class Registry
{
    const LOGGER = 'logger';

    /**
     * @var array
     */
    private static $storedValues = [];

    /**
     * @var array
     */
    private static $allowedKeys = [
        self::LOGGER,
    ];

    public static function set(string $key, $value)
    {
        if (!in_array($key, self::$allowedKeys)){
            throw new InvalidArgumentException('Invalid key given');
        }

        self::$storedValues[$key] = $value;
    }

    public static function get(string $key)
    {
        if (!in_array($key, self::$allowedKeys) || !isset(self::$storedValues[$key])){
            throw new \InvalidArgumentException('Invalid key given');
        }
        return self::$storedValues[$key];
    }
}