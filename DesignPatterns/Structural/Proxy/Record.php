<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 18.08.17
 * Time: 16:59
 */

namespace DesignPatterns\Structural\Proxy;


class Record
{
    /**
     * @var string[]
     */
    private $data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function __get($name): string
    {
        if (!isset($this->data[$name])){
            throw new \OutOfRangeException('Invalid name given');
        }
        return $this->data[$name];
    }

    /**
     * @param string $name
     * @param string $value
     */
    public function __set(string $name, string $value)
    {
        $this->data[$name] = $value;
    }

    public function __isset($name)
    {
        // TODO: Implement __isset() method.
    }
}