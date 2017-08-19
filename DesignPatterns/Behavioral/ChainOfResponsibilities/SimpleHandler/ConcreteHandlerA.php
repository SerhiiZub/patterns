<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 19.08.17
 * Time: 10:33
 */

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\SimpleHandler;


class ConcreteHandlerA extends AbstractHandler
{
    public function sendRequest($message)
    {
        if ($message == 1){
            echo __CLASS__ . ' process this message'.PHP_EOL;
        } else {
            if ($this->getNext()){
                $this->getNext()->sendRequest($message);
            }
        }
    }

}