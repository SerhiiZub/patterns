<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 16.08.17
 * Time: 17:24
 */

namespace DesignPatterns\Structural\Bridge;


abstract class Service
{
    /**
     * @var FormatterInterface
     */
    protected $implementation;

    /**
     * Service constructor.
     * @param FormatterInterface $printer
     */
    public function __construct(FormatterInterface $printer)
    {
        $this->implementation = $printer;
    }

    /**
     * @param FormatterInterface $printer
     */
    public function setImplementation(FormatterInterface $printer)
    {
        $this->implementation = $printer;
    }

    abstract public function get();
}