<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 15.02.18
 * Time: 16:31
 */

namespace DesignPatterns\Behavioral\NullObject;


class PrintLogger implements LoggerInterface
{
    public function log(string $str)
    {
        echo $str;
    }
}