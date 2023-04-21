<?php

namespace DesignPatterns\Creational\SimpleFactory\Burgers;

/**
 * Class Hamburger
 * @package DesignPatterns\Creational\SimpleFactory\Burgers
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
