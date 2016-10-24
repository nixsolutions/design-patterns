<?php
namespace DesignPatterns\Creational\Builder\Director;

use DesignPatterns\Creational\Builder\Burger\AbstractBurgerBuilder;
use DesignPatterns\Creational\Builder\Burger\Burger;

class Cashier implements DirectorInterface
{
    private $builder;

    public function buildBurger(AbstractBurgerBuilder $builder): Burger
    {
        $this->builder = $builder;

        $this->builder->createNewBurger();
        $this->builder->buildMeat();
        $this->builder->buildMuffin();
        $this->builder->buildSauce();

        return $this->builder->getBurger();
    }
}
