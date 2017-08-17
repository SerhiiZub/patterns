<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 17.08.17
 * Time: 9:44
 */

namespace DesignPatterns\Structural\Composite;


class InputElement implements RenderableInterface
{
    public function render(): string
    {
        return '<input type="text" />';
    }

}