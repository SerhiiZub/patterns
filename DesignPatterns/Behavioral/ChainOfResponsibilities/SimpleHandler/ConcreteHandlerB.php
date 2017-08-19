<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 19.08.17
 * Time: 10:36
 */

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\SimpleHandler;


class ConcreteHandlerB extends AbstractHandler
{
    public function sendRequest($message)
    {
        if ($message == 2){
            echo __CLASS__ . ' process this message'.PHP_EOL;
        } else {
            if ($this->getNext()){
                $this->getNext()->sendRequest($message);
            }
        }
    }

}