<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 17.08.17
 * Time: 11:41
 */

namespace DesignPatterns\Structural\Decorator\Tests;


use DesignPatterns\Structural\Decorator\JsonRenderer;
use DesignPatterns\Structural\Decorator\Webservice;
use DesignPatterns\Structural\Decorator\XmlRenderer;
use PHPUnit\Framework\TestCase;

require_once dirname(dirname(dirname(__DIR__))).'/autoloader.php';

class DecoratorTest extends TestCase
{
    private $service;

    protected function setUp()
    {
        $this->service = new Webservice('foobar');
    }

    public function testJsonDecorator(){
        $service = new JsonRenderer($this->service);
        $this->assertEquals('"foobar"', $service->renderData());
    }

    public function testXmlDecorator(){
        $service = new XmlRenderer($this->service);
        $this->assertXmlStringEqualsXmlString('<?xml version="1.0"?><content>foobar</content>', $service->renderData());
    }
}