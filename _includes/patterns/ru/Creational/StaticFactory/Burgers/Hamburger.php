<?php

namespace DesignPatterns\Creational\StaticFactory\Burgers;

/**
 * Class Hamburger
 * @package DesignPatterns\Creational\StaticFactory\Burgers
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
