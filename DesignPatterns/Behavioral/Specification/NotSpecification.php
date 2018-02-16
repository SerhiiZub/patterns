<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 16.02.18
 * Time: 10:47
 */

namespace DesignPatterns\Behavioral\Specification;


class NotSpecification implements SpecificationInterface
{
    /**
     * @var SpecificationInterface
     */
    private $specification;

    public function __construct(SpecificationInterface $specification)
    {
        $this->specification = $specification;
    }

    public function isSatisfiedBy(Item $item): bool
    {
        return !$this->specification->isSatisfiedBy($item);
    }
}