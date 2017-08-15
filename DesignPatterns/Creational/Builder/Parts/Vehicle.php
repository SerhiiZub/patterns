<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 15.08.17
 * Time: 12:49
 */

namespace DesignPatterns\Creational\Builder\Parts;


abstract class Vehicle
{
    /**
     * @var $data = [object]
     */
    private $data = [];

    /**
     * @param string $key
     * @param object $value
     */
    public function setPart(string $key, $value)
    {
        $this->data[$key] = $value;
    }
}