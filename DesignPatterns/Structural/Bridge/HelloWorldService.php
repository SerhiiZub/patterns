<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 16.08.17
 * Time: 17:29
 */

namespace DesignPatterns\Structural\Bridge;


class HelloWorldService extends Service
{
    public function get()
    {
        return $this->implementation->format('Hello World');
    }

}