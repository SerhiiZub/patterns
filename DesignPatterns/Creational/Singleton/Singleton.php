<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 15.08.17
 * Time: 17:41
 */

namespace DesignPatterns\Creational\Singleton;


final class Singleton
{
    private static $instance;

    public static function getInstance(): Singleton
    {
        if (null === static::$instance){
            static::$instance = new static();
        }

        return static::$instance;
    }

    private function __construct()
    {
    }

    private function __wakeup()
    {
    }

    private function __clone()
    {
    }


}