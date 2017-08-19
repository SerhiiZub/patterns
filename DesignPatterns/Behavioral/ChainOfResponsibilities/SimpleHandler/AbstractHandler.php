<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 19.08.17
 * Time: 10:25
 */

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\SimpleHandler;


abstract class AbstractHandler
{
    /**
     * @var AbstractHandler
     */
    protected $_next;

    abstract public function sendRequest($message);

    /**
     * @param $next AbstractHandler
     */
    public function setNext(AbstractHandler $next)
    {
        $this->_next = $next;
    }

    /**
     * @return AbstractHandler
     */
    public function getNext(): AbstractHandler
    {
        return $this->_next;
    }
}