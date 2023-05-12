<?php

namespace DesignPatterns\Behavioral\Specification;

/**
 * Class PriceSpecification
 * @package DesignPatterns\Behavioral\Specification
 */
class PriceSpecification implements SpecificationInterface
{
    /**
     * @var float
     */
    private $maxPrice;

    /**
     * @var float
     */
    private $minPrice;

    /**
     * @param float $minPrice
     * @param float $maxPrice
     */
    public function __construct(float $minPrice, float $maxPrice)
    {
        $this->minPrice = $minPrice;
        $this->maxPrice = $maxPrice;
    }

    /**
     * @param Item $item
     *
     * @return bool
     */
    public function isSatisfiedBy(Item $item): bool
    {
        if ($item->getPrice() > $this->maxPrice) {
            return false;
        }

        if ($item->getPrice() < $this->minPrice) {
            return false;
        }

        return true;
    }
}
