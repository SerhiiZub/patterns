<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 17.08.17
 * Time: 17:48
 */

namespace DesignPatterns\Structural\Flyweight;


class FlyweightFactory implements \Countable
{
    /**
     * @var CharacterFlyweight[]
     */
    private $pool;

    public function count(): int
    {
        return count($this->pool);
    }

    public function get(string $name): CharacterFlyweight
    {
        if (!isset($this->pool[$name])){
            $this->pool[$name] = new CharacterFlyweight($name);
        }

        return $this->pool[$name];
    }
}