<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 17.08.17
 * Time: 12:55
 */

namespace DesignPatterns\Structural\Facade\Tests;


use DesignPatterns\Structural\Facade\Facade;
use PHPUnit\Framework\TestCase;

require_once dirname(dirname(dirname(__DIR__))).'/autoloader.php';

class FacadeTest extends TestCase
{
    public function testComputerOn()
    {
        /**
         * @var OsInterface|\PHPUnit_Framework_MockObject_MockObject $os
         */
        $os = $this->createMock('DesignPatterns\Structural\Facade\OsInterface');

        $os->method('getName')->will($this->returnValue('Linux'));

        $bios = $this->getMockBuilder('DesignPatterns\Structural\Facade\BiosInterface')
            ->setMethods(['launch', 'execute', 'waitForKeyPress'])
            ->disableAutoload()
            ->getMock();

        $bios->expects($this->once())
            ->method('launch')
            ->with($os);

        $facade = new Facade($bios, $os);

        $facade->turnOn();

        $this->assertEquals('Linux', $os->getName());
    }
}