<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 15.08.17
 * Time: 17:46
 */

namespace DesignPatterns\Creational\Singleton\Tests;


use DesignPatterns\Creational\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

require_once dirname(dirname(dirname(__DIR__))).'/autoloader.php';

class SingletonTest extends TestCase
{
    public function testUniqueness()
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }
}