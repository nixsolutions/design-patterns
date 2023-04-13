<?php

namespace DesignPatterns\Structural\Decorator;

/**
 * Class CheeseburgerCheeseDecorator
 * @package DesignPatterns\Structural\Decorator
 */
class CheeseburgerCheeseDecorator extends AbstractDecorator
{
    const BEST_CHEESE_FOR_BURGER = 'Cheddar';

    /**
     * @return array
     */
    public function makeBurger(): array
    {
        $burger = $this->burger->makeBurger();

        return array_replace(
            $burger,
            [
                'cheese' => self::BEST_CHEESE_FOR_BURGER,
            ]
        );
    }
}
