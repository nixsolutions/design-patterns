<?php

namespace DesignPatterns\Structural\Decorator;

use DesignPatterns\Structural\Decorator\Burgers\BurgerInterface;

/**
 * Class AbstractDecorator
 * @package DesignPatterns\Structural\Decorator
 */
abstract class AbstractDecorator implements BurgerInterface
{

    /**
     * @var BurgerInterface
     */
    protected $burger;

    /**
     * AbstractDecorator constructor.
     *
     * @param BurgerInterface $burger
     */
    public function __construct(BurgerInterface $burger)
    {
        $this->burger = $burger;
    }

    /**
     * @return array
     */
    abstract public function makeBurger(): array;
}
