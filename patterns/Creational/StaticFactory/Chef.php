<?php

namespace DesignPatterns\Creational\StaticFactory;

use DesignPatterns\Creational\StaticFactory\Burgers\Burger;
use DesignPatterns\Creational\StaticFactory\Burgers\Hamburger;
use DesignPatterns\Creational\StaticFactory\Burgers\Cheeseburger;

class Chef
{
    public static function makeBurger(string $typeBurger): Burger
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
