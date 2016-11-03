<?php

namespace DesignPatterns\Creational\AbstractFactory\Recipes;

use DesignPatterns\Creational\AbstractFactory\Burgers\AbstractBurger;
use DesignPatterns\Creational\AbstractFactory\Burgers\Cheeseburger;
use DesignPatterns\Creational\AbstractFactory\Potatoes\AbstractPotato;
use DesignPatterns\Creational\AbstractFactory\Potatoes\FriesPotato;
use DesignPatterns\Creational\AbstractFactory\Waters\AbstractWater;
use DesignPatterns\Creational\AbstractFactory\Waters\FantaWater;

class EuropeComboRecipe implements AbstractFactoryInterface
{

    public function makeBurger(): AbstractBurger
    {
        return new Cheeseburger();
    }

    public function makePotato(): AbstractPotato
    {
        return new FriesPotato();
    }

    public function makeWater(): AbstractWater
    {
        return new FantaWater();
    }
}
