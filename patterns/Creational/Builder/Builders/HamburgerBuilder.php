<?php

namespace DesignPatterns\Creational\Builder\Builders;

use DesignPatterns\Creational\Builder\Burger\AbstractBurger;
use DesignPatterns\Creational\Builder\Burger\Burger;
use DesignPatterns\Creational\Builder\Burger\Parts\Meat;
use DesignPatterns\Creational\Builder\Burger\Parts\Muffin;
use DesignPatterns\Creational\Builder\Burger\Parts\Sauce;

/**
 * Class HamburgerBuilder
 * @package DesignPatterns\Creational\Builder\Builders
 */
class HamburgerBuilder implements BurgerBuilderInterface
{
    /**
     * @var AbstractBurger
     */
    private $hamburger;

    /**
     * @return void
     */
    public function createBurger()
    {
        $this->hamburger = new Burger();
    }

    /**
     * @return AbstractBurger
     */
    public function getBurger(): AbstractBurger
    {
        return $this->hamburger;
    }

    /**
     * @return void
     */
    public function addSauce()
    {
        $this->hamburger->setBurgerParts('sauce', new Sauce('Ketchup'));
    }

    /**
     * @return void
     */
    public function addMeat()
    {
        $this->hamburger->setBurgerParts('meet', new Meat('beef'));
    }

    /**
     * @return void
     */
    public function addMuffin()
    {
        $this->hamburger->setBurgerParts('muffin', new Muffin('muffin'));
    }
}
