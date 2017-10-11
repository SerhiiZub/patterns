<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 11.10.17
 * Time: 17:32
 */

namespace DesignPatterns\More\ServiceLocator\Tests;


use DesignPatterns\More\ServiceLocator\LogService;
use DesignPatterns\More\ServiceLocator\ServiceLocator;
use PHPUnit\Framework\TestCase;

require_once dirname(dirname(dirname(__DIR__))).'/autoloader.php';

class ServiceLocatorTest extends TestCase
{
    /**
     * @var ServiceLocator
     */
    private $serviceLocator;

    public function setUp()
    {
        $this->serviceLocator = new ServiceLocator();
    }

    public function testHasServuces()
    {
        $this->serviceLocator->addInstance(LogService::class, new LogService());

        $this->assertTrue($this->serviceLocator->has(LogService::class));
        $this->assertFalse($this->serviceLocator->has(self::class));
    }

    public function testGetWillInstantiateLogServiceIfNoInstanceHasBeenCreatedYet()
    {
        $this->serviceLocator->addClass(LogService::class, []);
        $logger = $this->serviceLocator->get(LogService::class);

        $this->assertInstanceOf(LogService::class, $logger);
    }
}