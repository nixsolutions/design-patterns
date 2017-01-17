<?php

namespace DesignPatterns\Structural\Adapter\Dollar;

/**
 * Class DollarsCash
 * @package DesignPatterns\Structural\Adapter\Dollar
 */
class DollarsCash implements DollarInterface
{
    /**
     * @var float
     */
    protected $cash;

    /**
     * DollarsCash constructor.
     *
     * @param float $cash
     */
    public function __construct(float $cash)
    {
        $this->cash = $cash;
    }

    /**
     * @return float
     */
    public function getCash(): float
    {
        return $this->cash;
    }
}
