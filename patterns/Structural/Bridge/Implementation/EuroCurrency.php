<?php

namespace DesignPatterns\Structural\Adapter\Euro;

/**
 * Class EuroCash
 * @package DesignPatterns\Structural\Adapter\Euro
 */
class EuroCurrency implements EuroInterface
{
    /**
     * @var float
     */
    protected $cash;

    /**
     * EuroCash constructor.
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
