<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 16.02.18
 * Time: 10:44
 */

namespace DesignPatterns\Behavioral\Specification;


class Item
{
    /**
     * @var float
     */
    private $price;

    public function __construct(float $price)
    {
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}