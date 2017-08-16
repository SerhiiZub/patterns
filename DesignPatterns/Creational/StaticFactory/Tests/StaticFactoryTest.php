<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 16.08.17
 * Time: 9:16
 */

namespace DesignPatterns\Creational\StaticFactory\Tests;


use DesignPatterns\Creational\StaticFactory\StaticFactory;
use PHPUnit\Framework\TestCase;
use \InvalidArgumentException;

require_once dirname(dirname(dirname(__DIR__))).'/autoloader.php';

class StaticFactoryTest extends TestCase
{
    public function testCanCreateNumberFormatter()
    {
        $this->assertInstanceOf(
            'DesignPatterns\Creational\StaticFactory\FormatNumber',
            StaticFactory::factory('number')
        );
    }

    public function testCanCreateStringFormatter()
    {
        $this->assertInstanceOf(
            'DesignPatterns\Creational\StaticFactory\FormatString',
            StaticFactory::factory('string')
        );
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testException()
    {
        StaticFactory::factory('object');
    }
}