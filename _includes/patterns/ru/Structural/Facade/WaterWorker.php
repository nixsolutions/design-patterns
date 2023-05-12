<?php

namespace DesignPatterns\Structural\Facade;

/**
 * Class WaterWorker
 * @package DesignPatterns\Structural\Facade
 */
class WaterWorker
{
    /**
     * @var array
     */
    protected $waters = [
        'cocaCola' => 'Coca-Cola',
        'fanta'    => 'Fanta',
        'sprite'   => 'Sprite',
    ];

    /**
     * @var array
     */
    protected $prices = [
        'cocaCola' => 2,
        'fanta'    => 3,
        'sprite'   => 1,
    ];

    /**
     * @param string $waterName
     *
     * @return string
     */
    public function make(string $waterName): string
    {
        return $this->waters[$waterName];
    }

    /**
     * @param string $waterName
     *
     * @return float
     */
    public function getPrice(string $waterName): float
    {
        return $this->prices[$waterName];
    }
}
