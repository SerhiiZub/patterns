<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 17.08.17
 * Time: 9:35
 */

namespace DesignPatterns\Structural\Composite;


class Form implements RenderableInterface
{
    /**
     * @var RenderableInterface[]
     */
    private $elements;

    /**
     * @return string
     */
    public function render(): string
    {
        $formCode = '<form>';

        foreach ($this->elements as $element){
            $formCode .= $element->render();
        }

        $formCode .= '</form>';

        return $formCode;
    }

    public function addElement(RenderableInterface $element)
    {
        $this->elements[] = $element;
    }

}