<?php

namespace DesignPatterns\Structural\Decorator;

/**
 * Class CheeseburgerSauceDecorator
 * @package DesignPatterns\Structural\Decorator
 */
class CheeseburgerSauceDecorator extends AbstractDecorator
{
    const NEW_SAUCE = 'Ukrainian sauce';

    /**
     * @return array
     */
    public function makeBurger(): array
    {
        $burger = $this->burger->makeBurger();

        return array_replace(
            $burger,
            [
                'sauce' => self::NEW_SAUCE,
            ]
        );
    }
}
