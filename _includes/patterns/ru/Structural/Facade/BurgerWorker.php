<?php

namespace DesignPatterns\Structural\Facade;

/**
 * Class BurgerWorker
 * @package DesignPatterns\Structural\Facade
 */
class BurgerWorker
{
    /**
     * @var array
     */
    protected $burgers = [
        'hamburger'    => [
            'muffin'     => 'muffin',
            'meat'       => 'beef',
            'sauce'      => 'ketchup',
            'withCheese' => false,
        ],
        'cheeseburger' => [
            'muffin'     => 'muffin',
            'meat'       => 'chicken',
            'sauce'      => 'mayonnaise',
            'withCheese' => true,
        ],
    ];

    /**
     * @var array
     */
    protected $prices = [
        'hamburger'    => 12.5,
        'cheeseburger' => 14.25,
    ];

    /**
     * @param string $burgerName
     *
     * @return array
     */
    public function make(string $burgerName): array
    {
        return $this->burgers[$burgerName];
    }

    /**
     * @param string $burgerName
     *
     * @return float
     */
    public function getPrice(string $burgerName): float
    {
        return $this->prices[$burgerName];
    }
}
