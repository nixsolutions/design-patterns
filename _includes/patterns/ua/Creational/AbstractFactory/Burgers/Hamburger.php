<?php

namespace DesignPatterns\Creational\AbstractFactory\Burgers;

/**
 * Class Hamburger
 * @package DesignPatterns\Creational\AbstractFactory\Burgers
 */
class Hamburger extends AbstractBurger
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
