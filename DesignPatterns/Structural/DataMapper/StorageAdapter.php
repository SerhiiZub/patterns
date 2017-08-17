<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 17.08.17
 * Time: 10:10
 */

namespace DesignPatterns\Structural\DataMapper;


class StorageAdapter
{
    /**
     * @var array
     */
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @param int $id
     * @return mixed|null
     */
    public function find(int $id)
    {
        if (isset($this->data[$id])){
            return $this->data[$id];
        }

        return null;
    }
}