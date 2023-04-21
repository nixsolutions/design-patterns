<?php

namespace DesignPatterns\Structural\DependencyInjection;

/**
 * Class Worker
 * @package DesignPatterns\Structural\DependencyInjection
 */
class Worker
{
    /**
     * @var BurgerInterface
     */
    protected $burger;

    /**
     * Worker constructor.
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
    public function getBurger(): array
    {
        return $this->burger->getBurger();
    }
}
