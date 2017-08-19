<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 19.08.17
 * Time: 10:41
 */

require_once __DIR__.'/AbstractHandler.php';
require_once __DIR__.'/ConcreteHandlerA.php';
require_once __DIR__.'/ConcreteHandlerB.php';

$handler = new \DesignPatterns\Behavioral\ChainOfResponsibilities\SimpleHandler\ConcreteHandlerA();
$handler->setNext(new \DesignPatterns\Behavioral\ChainOfResponsibilities\SimpleHandler\ConcreteHandlerB());

$handler->sendRequest(1);
$handler->sendRequest(2);