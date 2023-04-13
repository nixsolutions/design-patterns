<?php

namespace DesignPatterns\Creational\SimpleFactory;

use DesignPatterns\Creational\SimpleFactory\Burgers\Burger;
use DesignPatterns\Creational\SimpleFactory\Burgers\Hamburger;
use DesignPatterns\Creational\SimpleFactory\Burgers\Cheeseburger;

/**
 * Class Chef
 * @package DesignPatterns\Creational\SimpleFactory
 */
class Chef
{
    /**
     * @param string $typeBurger
     *
     * @return Burger
     */
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
