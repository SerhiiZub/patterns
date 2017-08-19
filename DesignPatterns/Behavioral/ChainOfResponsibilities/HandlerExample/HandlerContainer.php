<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 19.08.17
 * Time: 15:50
 */

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\HandlerExample;


class HandlerContainer implements HandlerInterface
{
    /**
     * @var HandlerInterface[]
     */
    protected $handlers = [];

    public function sendRequest($message)
    {
        foreach ($this->handlers as $handler){
            $handler->sendRequest($message);
        }
    }

    public function addHandler(HandlerInterface $handler)
    {
        $this->handlers[] = $handler;
    }
}