<?php

namespace DesignPatterns\Creational\Builder\Builders;

use DesignPatterns\Creational\Builder\Burger\AbstractBurger;
use DesignPatterns\Creational\Builder\Burger\Burger;
use DesignPatterns\Creational\Builder\Burger\Parts\Meat;
use DesignPatterns\Creational\Builder\Burger\Parts\Muffin;
use DesignPatterns\Creational\Builder\Burger\Parts\Sauce;

class CheeseburgerBuilder implements BurgerBuilderInterface
{
    /**
     * @var AbstractBurger
     */
    private $cheeseburger;

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

    public function addSauce()
    {
        $this->cheeseburger->setBurgerParts('sauce', new Sauce('mayonnaise'));
    }

    public function addMeat()
    {
        $this->cheeseburger->setBurgerParts('meet', new Meat('chicken'));
    }

    public function addMuffin()
    {
        $this->cheeseburger->setBurgerParts('muffin', new Muffin('muffin'));
    }
}
