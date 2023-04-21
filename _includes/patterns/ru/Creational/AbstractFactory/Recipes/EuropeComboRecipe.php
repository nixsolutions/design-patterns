<?php

namespace DesignPatterns\Creational\AbstractFactory\Recipes;

use DesignPatterns\Creational\AbstractFactory\Burgers\AbstractBurger;
use DesignPatterns\Creational\AbstractFactory\Burgers\Cheeseburger;
use DesignPatterns\Creational\AbstractFactory\Potatoes\AbstractPotato;
use DesignPatterns\Creational\AbstractFactory\Potatoes\FriesPotato;
use DesignPatterns\Creational\AbstractFactory\Waters\AbstractWater;
use DesignPatterns\Creational\AbstractFactory\Waters\FantaWater;

/**
 * Class EuropeComboRecipe
 * @package DesignPatterns\Creational\AbstractFactory\Recipes
 */
class EuropeComboRecipe implements AbstractFactoryInterface
{

    /**
     * @return AbstractBurger
     */
    public function makeBurger(): AbstractBurger
    {
        return new Cheeseburger();
    }

    /**
     * @return AbstractPotato
     */
    public function makePotato(): AbstractPotato
    {
        return new FriesPotato();
    }

    /**
     * @return AbstractWater
     */
    public function makeWater(): AbstractWater
    {
        return new FantaWater();
    }
}
