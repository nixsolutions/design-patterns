<?php

namespace DesignPatterns\Creational\FactoryMethod;

use DesignPatterns\Creational\FactoryMethod\Burgers\Burger;

/**
 * Interface FactoryMethodInterface
 * @package DesignPatterns\Creational\FactoryMethod
 */
interface FactoryMethodInterface
{
    /**
     * @param string $burgerType
     *
     * @return Burger
     */
    public function makeBurger(string $burgerType): Burger;
}
