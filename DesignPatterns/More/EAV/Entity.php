<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 01.11.17
 * Time: 10:09
 */

namespace DesignPatterns\More\EAV;


class Entity
{
    /**
     * @var \SplObjectStorage
     */
    private $values;

    /**
     * @var string
     */
    private $name;

    public function __construct(string $name, $values)
    {
        $this->values = new \SplObjectStorage();
        $this->name = $name;

        foreach ($values as $value){
            $this->values->attach($value);
        }
    }

    public function __toString(): string
    {
        $text = [$this->name];

        foreach ($this->values as $value){
            $text[] = (string)$value;
        }

        return implode(', ',$text);
    }
}