<?php

namespace DesignPatterns\Structural\Bridge\Dollar;

/**
 * Class DollarsCash
 * @package DesignPatterns\Structural\Bridge\Dollar
 */
class DollarsCurrency implements DollarInterface
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
