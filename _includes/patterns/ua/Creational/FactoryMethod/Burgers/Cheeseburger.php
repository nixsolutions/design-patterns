<?php

namespace DesignPatterns\Creational\FactoryMethod\Burgers;

/**
 * Class Cheeseburger
 * @package DesignPatterns\Creational\FactoryMethod\Burgers
 */
class Cheeseburger extends Burger
{
    /**
     * @var string
     */
    protected $meat = 'chicken';

    /**
     * @var string
     */
    protected $sauce = 'mayonnaise';

    /**
     * @var bool
     */
    protected $withCheese = true;
}
