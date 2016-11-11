<?php

namespace DesignPatterns\Structural\Decorator;

use DesignPatterns\Structural\Decorator\Burgers\BurgerInterface;

/**
 * Class CheeseburgerDecorator
 * @package DesignPatterns\Structural\Decorator
 */
class CheeseburgerDecorator implements BurgerInterface
{
    const BEST_CHEESE_FOR_BURGER = 'Cheddar';

    /**
     * @var array
     */
    protected $burger;

    /**
     * BurgerDecorator constructor.
     *
     * @param BurgerInterface $burger
     */
    public function __construct(BurgerInterface $burger)
    {
        $this->burger = $burger->makeBurger();
    }

    /**
     * @return array
     */
    public function makeBurger(): array
    {
        return array_replace(
            $this->burger,
            ['cheese' => self::BEST_CHEESE_FOR_BURGER]
        );
    }
}
