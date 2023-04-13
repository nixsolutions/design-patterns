<?php

namespace DesignPatterns\Structural\Decorator\Burgers;

/**
 * Interface BurgerInterface
 * @package DesignPatterns\Structural\Decorator\Burgers
 */
interface BurgerInterface
{
    /**
     * @return array
     */
    public function makeBurger(): array;
}
