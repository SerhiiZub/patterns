<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 19.08.17
 * Time: 16:15
 */

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\HandlerExample;


class ConcreteHandler implements HandlerInterface
{
    public function sendRequest($message)
    {
        echo 'Hello, ' . $message . PHP_EOL;
    }

}