<?php

namespace DesignPatterns\Structural\Bridge\Abstraction;

use DesignPatterns\Structural\Bridge\Implementation\CurrencyInterface;

/**
 * Class EuropeCashBox
 * @package DesignPatterns\Structural\Bridge\Abstraction
 */
class EuropeCashBox extends AbstractCashBox
{
    /**
     * @return float
     */
    public function getCashInCashBox(): float
    {
        return array_sum($this->cash);
    }

    /**
     * @param CurrencyInterface $currency
     *
     * @return void
     */
    public function setCash(CurrencyInterface $currency)
    {
        $defaultCurrencyRate = $this->defaultCurrency->getCurrencyRate();

        array_push($this->cash, ($currency->getSum() * $defaultCurrencyRate) / $currency->getCurrencyRate());
    }
}
