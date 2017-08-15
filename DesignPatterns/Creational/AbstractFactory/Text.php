<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 15.08.17
 * Time: 9:39
 */

namespace DesignPatterns\Creational\AbstractFactory;


abstract class Text
{
    private $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }
}