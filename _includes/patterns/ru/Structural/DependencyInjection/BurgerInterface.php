<?php

namespace DesignPatterns\Structural\DependencyInjection;

/**
 * Interface BurgerInterface
 * @package DesignPatterns\Structural\DependencyInjection
 */
interface BurgerInterface
{
    /**
     * @return array
     */
    public function getBurger(): array;
}
