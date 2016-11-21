<?php

namespace DesignPatterns\Structural\Bridge\Implementation;

/**
 * Class DollarCurrency
 * @package DesignPatterns\Structural\Bridge\Implementation
 */
class DollarCurrency extends AbstractCurrency
{
    /**
     * @var string
     */
    protected $symbol = '$';

    /**
     * @var float
     */
    const CURRENCY_RATE = 2.0;
}
