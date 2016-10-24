<?php
namespace DesignPatterns\Creational\Builder\Director;

use DesignPatterns\Creational\Builder\Burger\AbstractBurgerBuilder;
use DesignPatterns\Creational\Builder\Burger\Burger;

interface DirectorInterface
{
    public function buildBurger(AbstractBurgerBuilder $builder): Burger;
}
