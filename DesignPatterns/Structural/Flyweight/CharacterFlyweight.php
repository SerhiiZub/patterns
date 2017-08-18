<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 17.08.17
 * Time: 17:42
 */

namespace DesignPatterns\Structural\Flyweight;


class CharacterFlyweight implements FlyweightInterface
{
    /**
     * @var string
     */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }


    public function render(string $font): string
    {
        return sprintf('Character %s with font %s', $this->name, $font);
    }

}