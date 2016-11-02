<?php

namespace DesignPatterns\Creational\FactoryMethod;

use DesignPatterns\Creational\FactoryMethod\Burgers\Burger;

interface FactoryMethodInterface
{
    public function makeBurger(string $burgerType): Burger;
}
