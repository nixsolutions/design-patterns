<?php

namespace DesignPatterns\Structural\Bridge\Abstraction;

use DesignPatterns\Structural\Bridge\Implementation\CurrencyInterface;

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

    public function __constructor(CurrencyInterface $currency)
    {
        $this->defaultCurrency = $currency;
    }

    abstract public function getCashInCashBox(): float;

    abstract public function setCash(CurrencyInterface $currency);
}
