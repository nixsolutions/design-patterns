<?php

namespace DesignPatterns\Creational\Builder\Builders;

use DesignPatterns\Creational\Builder\Burger\AbstractBurger;

/**
 * Interface BurgerBuilderInterface
 * @package DesignPatterns\Creational\Builder\Builders
 */
interface BurgerBuilderInterface
{
    /**
     * @return void
     */
    public function createBurger();

    /**
     * @return AbstractBurger
     */
    public function getBurger(): AbstractBurger;

    /**
     * @return void
     */
    public function addSauce();

    /**
     * @return void
     */
    public function addMeat();

    /**
     * @return void
     */
    public function addMuffin();
}
