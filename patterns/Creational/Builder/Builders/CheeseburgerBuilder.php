<?php

namespace DesignPatterns\Creational\Builder\Builders;

use DesignPatterns\Creational\Builder\Burger\AbstractBurger;
use DesignPatterns\Creational\Builder\Burger\Burger;
use DesignPatterns\Creational\Builder\Burger\Parts\Meat;
use DesignPatterns\Creational\Builder\Burger\Parts\Muffin;
use DesignPatterns\Creational\Builder\Burger\Parts\Sauce;

/**
 * Class CheeseburgerBuilder
 * @package DesignPatterns\Creational\Builder\Builders
 */
class CheeseburgerBuilder implements BurgerBuilderInterface
{
    /**
     * @var AbstractBurger
     */
    private $cheeseburger;

    /**
     * @return void
     */
    public function createBurger()
    {
        $this->cheeseburger = new Burger();
    }

    /**
     * @return AbstractBurger
     */
    public function getBurger(): AbstractBurger
    {
        return $this->cheeseburger;
    }

    /**
     * @return void
     */
    public function addSauce()
    {
        $this->cheeseburger->setBurgerParts('sauce', new Sauce('mayonnaise'));
    }

    /**
     * @return void
     */
    public function addMeat()
    {
        $this->cheeseburger->setBurgerParts('meet', new Meat('chicken'));
    }

    /**
     * @return void
     */
    public function addMuffin()
    {
        $this->cheeseburger->setBurgerParts('muffin', new Muffin('muffin'));
    }
}
