<?php

namespace DesignPatterns\Creational\AbstractFactory\Recipes;

use DesignPatterns\Creational\AbstractFactory\Burgers\AbstractBurger;
use DesignPatterns\Creational\AbstractFactory\Burgers\Hamburger;
use DesignPatterns\Creational\AbstractFactory\Potatoes\AbstractPotato;
use DesignPatterns\Creational\AbstractFactory\Potatoes\FriesPotato;
use DesignPatterns\Creational\AbstractFactory\Waters\AbstractWater;
use DesignPatterns\Creational\AbstractFactory\Waters\CocaColaWater;

class UsaComboRecipe implements AbstractFactoryInterface
{

    public function makePotato(): AbstractPotato
    {
        return new FriesPotato();
    }

    public function makeWater(): AbstractWater
    {
        return new CocaColaWater();
    }

    public function makeBurger(): AbstractBurger
    {
        return new Hamburger();
    }
}
