<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 17.08.17
 * Time: 10:09
 */

namespace DesignPatterns\Structural\DataMapper;


class UserMapper
{
    /**
     * @var StorageAdapter
     */
    private $adapter;

    public function __construct(StorageAdapter $storage)
    {
        $this->adapter = $storage;
    }

    /**
     * @param int $id
     * @return User
     */
    public function findById(int $id): User
    {
        $result = $this->adapter->find($id);

        if ($result === null){
            throw new \InvalidArgumentException("User #$id not found");
        }

        return $this->mapRowToUser($result);
    }

    public function mapRowToUser(array $row): User
    {
        return User::formState($row);
    }
}