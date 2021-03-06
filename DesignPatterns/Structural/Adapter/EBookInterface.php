<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 16.08.17
 * Time: 9:39
 */

namespace DesignPatterns\Structural\Adapter;


interface EBookInterface
{
    public function unlock();

    public function pressNext();

    /**
     * returns current page and total number of pages, like [10, 100] is page 10 of 100
     *
     * @return int[]
     */
    public function getPage(): array;
}