<?php

namespace DesignPatterns\Creational\AbstractFactory\Burgers;

/**
 * Class AbstractBurger
 * @package DesignPatterns\Creational\AbstractFactory\Burgers
 */
abstract class AbstractBurger
{
    /**
     * @var string
     */
    protected $meat;

    /**
     * @var string
     */
    protected $sauce;

    /**
     * @var bool
     */
    protected $withCheese;
}
