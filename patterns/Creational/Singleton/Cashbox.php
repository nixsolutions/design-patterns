<?php
namespace DesignPatterns\Creational\Singleton;

/**
 * Class Сashbox
 * @package DesignPatterns\Creational\Singleton
 */
class Cashbox implements SingletonInterface
{
    protected $cash = [];

    use SingletonTrait;

    /**
     * @return null
     */
    public function getAllCash()
    {
        return array_sum($this->cash);
    }

    /**
     * @param float $cash
     */
    public function setCash(float $cash)
    {
        $this->cash[uniqid()] = $cash;
    }

    final public function __construct()
    {
    }

    final public function __clone()
    {
    }

    final public function __wakeup()
    {
    }
}
