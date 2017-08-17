<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 17.08.17
 * Time: 11:21
 */

namespace DesignPatterns\Structural\Decorator;


abstract class RendererDecorator implements RenderableInterface
{
    /**
     * @var RenderableInterface
     */
    protected $wrapped;

    /**
     * RendererDecorator constructor.
     * @param RenderableInterface $render
     */
    public function __construct(RenderableInterface $render)
    {
        $this->wrapped = $render;
    }
}