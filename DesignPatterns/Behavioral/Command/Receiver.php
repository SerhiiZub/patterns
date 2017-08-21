<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 19.08.17
 * Time: 16:32
 */

namespace DesignPatterns\Behavioral\Command;


class Receiver
{
    /**
     * @var bool
     */
    private $enableDate = false;

    /**
     * @var string[]
     */
    private $output = [];

    /**
     * @param string $str
     */
    public function write(string $str)
    {
        if ($this->enableDate){
            $str .= ' ['.date('Y-m-d').']';
        }
        $this->output[] = $str;
    }

    public function getOutput(): string
    {
        return implode(PHP_EOL, $this->output);
    }

    public function enableDate()
    {
        $this->enableDate = true;
    }

    public function disableDate()
    {
        $this->enableDate = false;
    }
}