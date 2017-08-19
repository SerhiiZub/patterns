<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 19.08.17
 * Time: 11:43
 */

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\LoggerExample;


class ConsoleLogger extends Logger
{
    protected function _writeMessage(string $message)
    {
        echo microtime(true). ' - console message: '.$message.PHP_EOL;
    }

}