<?php

namespace DesignPatterns\Structural\Decorator\Burgers;

/**
 * Class AbstractBurger
 * @package DesignPatterns\Structural\Decorator\Burgers
 */
abstract class AbstractBurger implements BurgerInterface
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
     * @var string
     */
    protected $muffin = 'muffin';

    /**
     * @return array
     */
    public function makeBurger(): array
    {
        return [
            'muffin' => $this->muffin,
            'sauce'  => $this->sauce,
            'meat'   => $this->meat,
        ];
    }
}
