<?php

namespace DesignPatterns\Structural\Adapter;

use DesignPatterns\Structural\Adapter\Dollar\DollarInterface;

/**
 * Class CashBox
 * @package DesignPatterns\Structural\Adapter
 */
class CashBox
{
    /**
     * @var float
     */
    protected $cash;

    /**
     * @return float
     */
    public function getSumCashInCashBox()
    {
        return $this->cash;
    }

    /**
     * @param DollarInterface $dollarCash
     *
     * @return void
     */
    public function setCash(DollarInterface $dollarCash)
    {
        $this->cash += $dollarCash->getCash();
    }
}
