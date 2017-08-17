<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 17.08.17
 * Time: 11:17
 */

namespace DesignPatterns\Structural\Decorator;


interface RenderableInterface
{
    public function renderData(): string;
}