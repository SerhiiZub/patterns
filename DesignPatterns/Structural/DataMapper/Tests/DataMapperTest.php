<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 17.08.17
 * Time: 10:22
 */

namespace DesignPatterns\Structural\DataMapper\Tests;


use DesignPatterns\Structural\DataMapper\StorageAdapter;
use DesignPatterns\Structural\DataMapper\User;
use DesignPatterns\Structural\DataMapper\UserMapper;
use PHPUnit\Framework\TestCase;

require_once dirname(dirname(dirname(__DIR__))).'/autoloader.php';

class DataMapperTest extends TestCase
{
    public function testCanMapUserFromStorage()
    {
        $storage = new StorageAdapter(array(
                                            1 => [
                                                    'username' => 'vasia',
                                                    'email' => 'email@mail',
                                            ],
                                            2 => [
                                                'username' => 'petia',
                                                'email' => 'mail@email'
                                            ]
                                        ));

        $mapper = new UserMapper($storage);

        $user = $mapper->findById(1);
        $this->assertInstanceOf(User::class, $user);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testWillNotMapInvalidData()
    {
        $storage = new StorageAdapter([]);
        $mapper = new UserMapper($storage);

        $mapper->findById(1);
    }
}