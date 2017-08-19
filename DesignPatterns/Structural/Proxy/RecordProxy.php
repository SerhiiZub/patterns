<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 18.08.17
 * Time: 17:13
 */

namespace DesignPatterns\Structural\Proxy;


class RecordProxy extends Record
{
    /**
     * @var bool
     */
    private $isDirty = false;

    /**
     * @var bool
     */
    private $isInitialized = false;

    public function __construct(array $data)
    {
        parent::__construct($data);

        if (count($data) > 0){
            $this->isInitialized = true;
            $this->isDirty = true;
        }
    }

    public function __set(string $name, string $value)
    {
        $this->isDirty = true;

        parent::__set($name, $value);
    }

    public function isDirty(): bool
    {
        return $this->isDirty;
    }

}