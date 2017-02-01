<?php

namespace DesignPatterns\Creational\Singleton;

/**
 * Class Сashbox
 * @package DesignPatterns\Creational\Singleton
 */
class Cashbox implements SingletonInterface
{
    use SingletonTrait, CashboxTrait;
}
