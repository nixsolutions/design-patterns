<?php

namespace DesignPatterns\Structural\Decorator\Burgers;

/**
 * Class Cheeseburger
 * @package DesignPatterns\Structural\Decorator\Burgers
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
}
