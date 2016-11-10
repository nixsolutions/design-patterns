<?php

namespace DesignPatterns\Creational\Singleton;

/**
 * Class Сashbox
 * @package DesignPatterns\Creational\Singleton
 */
class Cashbox implements SingletonInterface
{
    /**
     * @var array
     */
    private $cash = [];

    use SingletonTrait;

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
     */
    public function setCash(float $cash)
    {
        $this->cash[uniqid()] = $cash;
    }
}
