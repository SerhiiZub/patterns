<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 17.08.17
 * Time: 12:47
 */

namespace DesignPatterns\Structural\Facade;


interface OsInterface
{
    public function halt();

    public function getName(): string;
}