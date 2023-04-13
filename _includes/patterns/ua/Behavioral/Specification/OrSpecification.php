<?php

namespace DesignPatterns\Behavioral\Specification;

/**
 * Class OrSpecification
 * @package DesignPatterns\Behavioral\Specification
 */
class OrSpecification implements SpecificationInterface
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

        return in_array(true, $satisfied);
    }
}
