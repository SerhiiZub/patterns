<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 16.08.17
 * Time: 9:34
 */

namespace DesignPatterns\Structural\Adapter;


class Book implements BookInterface
{
    /**
     * @var int
     */
    private $page;

    public function turnPage()
    {
        $this->page++;
    }

    public function open()
    {
        $this->page = 1;
    }

    public function getPage(): int
    {
        return $this->page;
    }

}