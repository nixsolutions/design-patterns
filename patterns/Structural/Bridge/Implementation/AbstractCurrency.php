<?php

namespace DesignPatterns\Structural\Bridge\Implementation;

/**
 * Class AbstractCurrency
 * @package DesignPatterns\Structural\Bridge\Implementation
 */
abstract class AbstractCurrency implements CurrencyInterface
{
    /**
     * @var string
     */
    protected $symbol;

    /**
     * @var float
     */
    protected $sumCash = 0.0;

    /**
     * AbstractCurrency constructor.
     *
     * @param float $sumCash
     */
    public function __construct(float $sumCash = null)
    {
        if ($sumCash) {
            $this->sumCash = $sumCash;
        }
    }

    /**
     * @return string
     */
    public function getCurrencySymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @return float
     */
    public function getCurrencyRate(): float
    {
        return static::CURRENCY_RATE;
    }

    /**
     * @return float
     */
    public function getSum(): float
    {
        return $this->sumCash;
    }
}
