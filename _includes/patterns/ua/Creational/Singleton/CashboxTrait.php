<?php

namespace DesignPatterns\Creational\Singleton;

trait CashboxTrait
{
    /**
     * @var array
     */
    private $cash = [];

    /**
     * Return sum for all cash operation on cashbox
     *
     * @return float
     */
    public function getAllCash(): float
    {
        return array_sum($this->cash);
    }

    /**
     * Set new cash operation
     *
     * @param float $cash
     *
     * @return void
     */
    public function setCash(float $cash)
    {
        $this->cash[uniqid()] = $cash;
    }
}
