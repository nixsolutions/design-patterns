<?php

namespace DesignPatterns\Structural\Bridge\Abstraction;

use DesignPatterns\Structural\Bridge\Implementation\CurrencyInterface;

/**
 * Class AbstractCashBox
 * @package DesignPatterns\Structural\Bridge\Abstraction
 */
abstract class AbstractCashBox
{
    /**
     * @var CurrencyInterface
     */
    protected $defaultCurrency;

    /**
     * @var CurrencyInterface[]|float
     */
    protected $cash = [];

    /**
     * AbstractCashBox constructor.
     *
     * @param CurrencyInterface $currency
     */
    public function __construct(CurrencyInterface $currency)
    {
        $this->defaultCurrency = $currency;
    }

    /**
     * @return CurrencyInterface
     */
    public function getDefaultCurrency(): CurrencyInterface
    {
        return $this->defaultCurrency;
    }

    /**
     * @return float
     */
    abstract public function getCashInCashBox(): float;

    /**
     * @param CurrencyInterface $currency
     *
     * @return void
     */
    abstract public function setCash(CurrencyInterface $currency);
}
