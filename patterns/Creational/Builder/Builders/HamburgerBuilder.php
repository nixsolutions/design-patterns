<?php

namespace DesignPatterns\Creational\Builder\Builders;

use DesignPatterns\Creational\Builder\Burger\AbstractBurger;
use DesignPatterns\Creational\Builder\Burger\Burger;
use DesignPatterns\Creational\Builder\Burger\Parts\Meat;
use DesignPatterns\Creational\Builder\Burger\Parts\Muffin;
use DesignPatterns\Creational\Builder\Burger\Parts\Sauce;

class HamburgerBuilder implements BurgerBuilderInterface
{
    /**
     * @var AbstractBurger
     */
    private $hamburger;

    public function createBurger()
    {
        $this->hamburger = new Burger();
    }

    public function getBurger(): AbstractBurger
    {
        return $this->hamburger;
    }

    public function addSauce()
    {
        $this->hamburger->setBurgerParts('sauce', new Sauce('Ketchup'));
    }

    public function addMeat()
    {
        $this->hamburger->setBurgerParts('meet', new Meat('beef'));
    }

    public function addMuffin()
    {
        $this->hamburger->setBurgerParts('muffin', new Muffin('muffin'));
    }
}
