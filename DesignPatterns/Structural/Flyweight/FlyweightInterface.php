<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 17.08.17
 * Time: 17:41
 */

namespace DesignPatterns\Structural\Flyweight;


interface FlyweightInterface
{
    public function render(string $extrinsicState): string;
}