<?php

namespace DesignPatterns\Creational\Builder\Builders;

use DesignPatterns\Creational\Builder\Burger\AbstractBurger;

interface BurgerBuilderInterface
{
    public function createBurger();

    public function getBurger(): AbstractBurger;

    public function addSauce();

    public function addMeat();

    public function addMuffin();
}
