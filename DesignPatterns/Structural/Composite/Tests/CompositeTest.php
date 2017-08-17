<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 17.08.17
 * Time: 9:50
 */

namespace DesignPatterns\Structural\Composite\Tests;


use DesignPatterns\Structural\Composite\Form;
use DesignPatterns\Structural\Composite\InputElement;
use DesignPatterns\Structural\Composite\TextElement;
use PHPUnit\Framework\TestCase;

require_once dirname(dirname(dirname(__DIR__))).'/autoloader.php';

class CompositeTest extends TestCase
{
    public function testRender()
    {
        $form = new Form();
        $form->addElement(new TextElement('Email:'));
        $form->addElement(new InputElement());

        $emded = new Form();
        $emded->addElement(new TextElement('Password:'));
        $emded->addElement(new InputElement());

        $form->addElement($emded);

        $this->assertEquals('<form>Email:<input type="text" /><form>Password:<input type="text" /></form></form>', $form->render());
    }
}