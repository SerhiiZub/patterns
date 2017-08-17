<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 17.08.17
 * Time: 9:47
 */

namespace DesignPatterns\Structural\Composite;


class TextElement implements RenderableInterface
{
    /**
     * @var string
     */
    private $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }


    public function render(): string
    {
        return $this->text;
    }

}