<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 17.08.17
 * Time: 11:19
 */

namespace DesignPatterns\Structural\Decorator;


class Webservice implements RenderableInterface
{
    /**
     * @var string
     */
    private $data;

    public function __construct(string $data)
    {
        $this->data = $data;
    }


    public function renderData(): string
    {
        return $this->data;
    }

}