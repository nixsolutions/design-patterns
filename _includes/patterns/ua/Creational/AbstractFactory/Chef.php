<?php

namespace DesignPatterns\Creational\AbstractFactory;

use DesignPatterns\Creational\AbstractFactory\Burgers\AbstractBurger;
use DesignPatterns\Creational\AbstractFactory\Potatoes\AbstractPotato;
use DesignPatterns\Creational\AbstractFactory\Recipes\AbstractFactoryInterface;
use DesignPatterns\Creational\AbstractFactory\Waters\AbstractWater;

/**
 * Class Chef
 * @package DesignPatterns\Creational\AbstractFactory
 */
class Chef
{
    /**
     * @var AbstractFactoryInterface
     */
    protected $comboRecipe;

    /**
     * Chef constructor.
     *
     * @param AbstractFactoryInterface $recipe
     */
    public function __construct(AbstractFactoryInterface $recipe)
    {
        $this->comboRecipe = $recipe;
    }

    /**
     * @return AbstractBurger
     */
    public function getBurger(): AbstractBurger
    {
        return $this->comboRecipe->makeBurger();
    }

    /**
     * @return AbstractPotato
     */
    public function getPotato(): AbstractPotato
    {
        return $this->comboRecipe->makePotato();
    }

    /**
     * @return AbstractWater
     */
    public function getWater(): AbstractWater
    {
        return $this->comboRecipe->makeWater();
    }

    /**
     * @return array
     */
    public function getCombo(): array
    {
        return [
            'Burger' => $this->getBurger(),
            'Potato' => $this->getPotato(),
            'Water'  => $this->getWater(),
        ];
    }
}
