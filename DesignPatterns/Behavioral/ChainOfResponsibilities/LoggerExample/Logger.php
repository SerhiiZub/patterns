<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 19.08.17
 * Time: 11:28
 */

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\LoggerExample;


abstract class Logger
{
    const DEBUG = 1;
    const CRITICAL = 2;
    const NOTICE = 4;

    protected $mask = 0;

    /**
     * @var Logger
     */
    protected $next;

    public function __construct($mask)
    {
        $this->mask = $mask;
    }

    /**
     * @param string $message
     * @param int $priority
     */
    public function message(string $message, int $priority)
    {
        if ($this->mask & $priority){
            $this->_writeMessage($message);
        }

        if ($this->next){
            $this->getNext()->message($message, $priority);
        }
    }

    /**
     * @param string $message
     * @return mixed
     */
    abstract protected function _writeMessage(string $message);

    public function setNext(Logger $next)
    {
        $this->next = $next;
    }

    /**
     * @return Logger
     */
    public function getNext(): Logger
    {
        return $this->next;
    }
}