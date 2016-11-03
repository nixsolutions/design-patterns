<?php

namespace DesignPatterns\Creational\AbstractFactory;

use DesignPatterns\Creational\AbstractFactory\Burgers\AbstractBurger;
use DesignPatterns\Creational\AbstractFactory\Potatoes\AbstractPotato;
use DesignPatterns\Creational\AbstractFactory\Recipes\AbstractFactoryInterface;
use DesignPatterns\Creational\AbstractFactory\Waters\AbstractWater;

class Chef
{
    /**
     * @var AbstractFactoryInterface
     */
    protected $comboRecipe;

    public function __construct(AbstractFactoryInterface $recipe)
    {
        $this->comboRecipe = $recipe;
    }

    public function getBurger(): AbstractBurger
    {
        return $this->comboRecipe->makeBurger();
    }

    public function getPotato(): AbstractPotato
    {
        return $this->comboRecipe->makePotato();
    }

    public function getWater(): AbstractWater
    {
        return $this->comboRecipe->makeWater();
    }

    public function getCombo(): array
    {
        return [
            'Burger' => $this->getBurger(),
            'Potato' => $this->getPotato(),
            'Water'  => $this->getWater(),
        ];
    }
}
