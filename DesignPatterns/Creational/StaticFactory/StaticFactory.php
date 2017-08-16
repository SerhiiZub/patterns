<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 15.08.17
 * Time: 17:52
 */

namespace DesignPatterns\Creational\StaticFactory;



final class StaticFactory
{
    public static function factory(string $type): FormatterInterface
    {
        if ($type === 'number'){
            return new FormatNumber();
        }

        if ($type === 'string'){
            return new FormatString();
        }

        throw new \InvalidArgumentException('Unknown format given');
    }
}