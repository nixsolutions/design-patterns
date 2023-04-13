<?php

namespace DesignPatterns\Behavioral\Specification;

/**
 * Class AndSpecification
 * @package DesignPatterns\Behavioral\Specification
 */
class AndSpecification implements SpecificationInterface
{
    /**
     * @var SpecificationInterface[]
     */
    private $specifications;

    /**
     * @param SpecificationInterface[] ...$specifications
     */
    public function __construct(SpecificationInterface ...$specifications)
    {
        $this->specifications = $specifications;
    }

    /**
     * @param Item $item
     *
     * @return bool
     */
    public function isSatisfiedBy(Item $item): bool
    {
        $satisfied = [];

        foreach ($this->specifications as $specification) {
            $satisfied[] = $specification->isSatisfiedBy($item);
        }

        return !in_array(false, $satisfied);
    }
}
