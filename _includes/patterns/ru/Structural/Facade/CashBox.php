<?php

namespace DesignPatterns\Structural\Facade;

use Exception;

/**
 * Class CashBox
 * @package DesignPatterns\Structural\Facade
 */
class CashBox
{
    /**
     * @var float
     */
    protected $cash;

    /**
     * CashBox constructor.
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

    /**
     * @param $orderPrice
     * @param $cash
     *
     * @return float
     * @throws Exception
     */
    public function makeOrder($orderPrice, $cash): float
    {
        $change = $cash - $orderPrice;

        if ($change < 0) {
            throw new Exception('Need more money.');
        }

        $this->cash += $cash - $change;

        return $change;
    }
}
