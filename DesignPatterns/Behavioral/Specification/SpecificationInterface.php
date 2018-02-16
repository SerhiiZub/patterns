<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 16.02.18
 * Time: 10:45
 */

namespace DesignPatterns\Behavioral\Specification;


interface SpecificationInterface
{
    public function isSatisfiedBy(Item $item): bool;
}