<?php

namespace DesignPatterns\Structural\Bridge\Implementation;

/**
 * Class EuroCurrency
 * @package DesignPatterns\Structural\Bridge\Implementation
 */
class EuroCurrency extends AbstractCurrency
{
    /**
     * @var string
     */
    protected $symbol = '€';

    /**
     * @var float
     */
    const CURRENCY_RATE = 1;
}
