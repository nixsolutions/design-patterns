<?php

namespace DesignPatterns\Creational\AbstractFactory\Recipes;

use DesignPatterns\Creational\AbstractFactory\Burgers\AbstractBurger;
use DesignPatterns\Creational\AbstractFactory\Potatoes\AbstractPotato;
use DesignPatterns\Creational\AbstractFactory\Waters\AbstractWater;

interface AbstractFactoryInterface
{
    public function makeBurger(): AbstractBurger;

    public function makePotato(): AbstractPotato;

    public function makeWater(): AbstractWater;
}
