<?php

namespace DesignPatterns\Creational\Multiton;

use DesignPatterns\Creational\Singleton\CashboxTrait;

/**
 * Class ShopCashSystem
 * @package DesignPatterns\Creational\Multiton
 */
class ShopCashSystem implements MultitonInterface
{
    use CashboxTrait;

    /**
     * @var MultitonInterface[]
     */
    private static $instances = [];

    /**
     * Return Singleton instance
     *
     * @param string $instanceName
     *
     * @return MultitonInterface
     */
    public static function getInstance(string $instanceName): MultitonInterface
    {
        if (!isset(self::$instances[$instanceName])) {
            self::$instances[$instanceName] = new self();
        }

        return self::$instances[$instanceName];
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}
