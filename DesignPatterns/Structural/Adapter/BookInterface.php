<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 16.08.17
 * Time: 9:32
 */

namespace DesignPatterns\Structural\Adapter;


interface BookInterface
{
    public function turnPage();

    public function open();

    public function getPage(): int;
}