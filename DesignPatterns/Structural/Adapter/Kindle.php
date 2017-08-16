<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 16.08.17
 * Time: 12:44
 */

namespace DesignPatterns\Structural\Adapter;


class Kindle implements EBookInterface
{
    /**
     * @var int
     */
    private $page = 1;

    /**
     * @var int
     */
    private $totalPages = 100;

    public function unlock()
    {

    }

    public function pressNext()
    {
        $this->page++;
    }

    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }

}