<?php

namespace DesignPatterns\Structural\Decorator\Burgers;

/**
 * Class Cheeseburger
 * @package DesignPatterns\Structural\Decorator\Burgers
 */
class Cheeseburger implements BurgerInterface
{
    /**
     * @var string
     */
    protected $meat = 'chicken';

    /**
     * @var string
     */
    protected $sauce = 'mayonnaise';

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
