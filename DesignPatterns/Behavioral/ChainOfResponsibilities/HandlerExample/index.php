<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 19.08.17
 * Time: 16:18
 */

use \DesignPatterns\Behavioral\ChainOfResponsibilities\HandlerExample\HandlerContainer;
use \DesignPatterns\Behavioral\ChainOfResponsibilities\HandlerExample\ConcreteHandler;

require_once dirname(dirname(dirname(__DIR__))).'/autoloader.php';

$handler = new HandlerContainer();
$handler->addHandler(new ConcreteHandler());

$handler->sendRequest('John');