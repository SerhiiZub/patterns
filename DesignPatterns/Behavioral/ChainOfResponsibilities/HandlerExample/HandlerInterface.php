<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 19.08.17
 * Time: 15:47
 */

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\HandlerExample;


interface HandlerInterface
{
    public function sendRequest($message);
}