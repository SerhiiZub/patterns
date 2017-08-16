<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 16.08.17
 * Time: 13:36
 */

namespace DesignPatterns\Structural\Bridge;


interface FormatterInterface
{
    public function format(string $text);
}