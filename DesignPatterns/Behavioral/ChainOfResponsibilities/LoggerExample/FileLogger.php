<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 19.08.17
 * Time: 11:44
 */

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\LoggerExample;


class FileLogger extends Logger
{
    protected function _writeMessage(string $message)
    {
        $file = fopen('error.log', 'a');
        fwrite($file, $message . PHP_EOL);
        fclose($file);
        echo microtime(true). ' - file write: '.$message.PHP_EOL;
    }

}