<?php

namespace DesignPatterns\Creational\AbstractFactory\Burgers;

/**
 * Class Cheeseburger
 * @package DesignPatterns\Creational\AbstractFactory\Burgers
 */
class Cheeseburger extends AbstractBurger
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
