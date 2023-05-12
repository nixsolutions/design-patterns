<?php

namespace DesignPatterns\Creational\SimpleFactory\Burgers;

/**
 * Class Cheeseburger
 * @package DesignPatterns\Creational\SimpleFactory\Burgers
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
