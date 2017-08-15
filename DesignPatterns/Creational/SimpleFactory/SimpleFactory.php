<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 15.08.17
 * Time: 17:25
 */

namespace DesignPatterns\Creational\SimpleFactory;



class SimpleFactory
{
    public function createBicycle(): Bicycle
    {
        return new Bicycle();
    }
}