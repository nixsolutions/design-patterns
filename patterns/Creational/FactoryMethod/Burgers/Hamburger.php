<?php

namespace DesignPatterns\Creational\FactoryMethod\Burgers;

/**
 * Class Hamburger
 * @package DesignPatterns\Creational\FactoryMethod\Burgers
 */
class Hamburger extends Burger
{
    /**
     * @var string
     */
    protected $meat = 'beef';

    /**
     * @var string
     */
    protected $sauce = 'ketchup';

    /**
     * @var bool
     */
    protected $withCheese = false;
}
