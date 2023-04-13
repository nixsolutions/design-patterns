<?php

namespace DesignPatterns\Creational\AbstractFactory\Recipes;

use DesignPatterns\Creational\AbstractFactory\Burgers\AbstractBurger;
use DesignPatterns\Creational\AbstractFactory\Burgers\Hamburger;
use DesignPatterns\Creational\AbstractFactory\Potatoes\AbstractPotato;
use DesignPatterns\Creational\AbstractFactory\Potatoes\FriesPotato;
use DesignPatterns\Creational\AbstractFactory\Waters\AbstractWater;
use DesignPatterns\Creational\AbstractFactory\Waters\CocaColaWater;

/**
 * Class UsaComboRecipe
 * @package DesignPatterns\Creational\AbstractFactory\Recipes
 */
class UsaComboRecipe implements AbstractFactoryInterface
{

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
        return new CocaColaWater();
    }

    /**
     * @return AbstractBurger
     */
    public function makeBurger(): AbstractBurger
    {
        return new Hamburger();
    }
}
