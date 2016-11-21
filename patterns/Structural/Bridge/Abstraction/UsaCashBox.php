<?php

namespace DesignPatterns\Structural\Bridge\Abstraction;

use DesignPatterns\Structural\Bridge\Implementation\CurrencyInterface;

/**
 * Class UsaCashBox
 * @package DesignPatterns\Structural\Bridge\Abstraction
 */
class UsaCashBox extends AbstractCashBox
{
    /**
     * @return float
     */
    public function getCashInCashBox(): float
    {
        $result = 0.0;

        $defaultCurrencyRate = $this->defaultCurrency->getCurrencyRate();

        foreach ($this->cash as $cash) {
            $result += ($cash->getSum() * $defaultCurrencyRate) / $cash->getCurrencyRate();
        }

        return $result;
    }

    /**
     * @param CurrencyInterface $currency
     *
     * @return void
     */
    public function setCash(CurrencyInterface $currency)
    {
        array_push($this->cash, $currency);
    }
}
