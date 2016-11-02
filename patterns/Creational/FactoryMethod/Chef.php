<?php

namespace DesignPatterns\Creational\FactoryMethod;

use DesignPatterns\Creational\FactoryMethod\Burgers\Burger;
use DesignPatterns\Creational\FactoryMethod\Burgers\Hamburger;
use DesignPatterns\Creational\FactoryMethod\Burgers\Cheeseburger;

class Chef implements FactoryMethodInterface
{
    public function makeBurger(string $typeBurger): Burger
    {
        $typeBurger = strtolower($typeBurger);

        switch ($typeBurger) {
            case 'cheeseburger':
                return new Cheeseburger();
            case 'hamburger':
                return new Hamburger();
            default:
                throw new \InvalidArgumentException('Sorry. But we haven\'t this burger.');
        }
    }
}
