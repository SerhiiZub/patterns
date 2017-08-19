<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 19.08.17
 * Time: 11:48
 */

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\LoggerExample;


class EmailLogger extends Logger
{
    protected function _writeMessage(string $message)
    {
        echo microtime(true). ' - mail sent: '.$message.PHP_EOL;
//        mail("developer@example.com", "error", $message);
    }

}