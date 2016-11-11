<?php

namespace DesignPatterns\Creational\AbstractFactory\Recipes;

use DesignPatterns\Creational\AbstractFactory\Burgers\AbstractBurger;
use DesignPatterns\Creational\AbstractFactory\Potatoes\AbstractPotato;
use DesignPatterns\Creational\AbstractFactory\Waters\AbstractWater;

/**
 * Interface AbstractFactoryInterface
 * @package DesignPatterns\Creational\AbstractFactory\Recipes
 */
interface AbstractFactoryInterface
{
    /**
     * @return AbstractBurger
     */
    public function makeBurger(): AbstractBurger;

    /**
     * @return AbstractPotato
     */
    public function makePotato(): AbstractPotato;

    /**
     * @return AbstractWater
     */
    public function makeWater(): AbstractWater;
}
