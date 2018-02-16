<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 15.02.18
 * Time: 16:31
 */

namespace DesignPatterns\Behavioral\NullObject;


class NullLogger implements LoggerInterface
{
    public function log(string $str)
    {
        // do nothing
    }
}
{

}