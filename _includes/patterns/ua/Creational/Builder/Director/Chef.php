<?php

namespace DesignPatterns\Creational\Builder\Director;

use DesignPatterns\Creational\Builder\Builders\BurgerBuilderInterface;
use DesignPatterns\Creational\Builder\Burger\AbstractBurger;

/**
 * Class Chef
 * @package DesignPatterns\Creational\Builder\Director
 */
class Chef implements DirectorInterface
{
    /**
     * @param BurgerBuilderInterface $builder
     *
     * @return AbstractBurger
     */
    public function buildBurger(BurgerBuilderInterface $builder): AbstractBurger
    {
        $builder->createBurger();
        $builder->addMeat();
        $builder->addSauce();
        $builder->addMuffin();

        return $builder->getBurger();
    }
}
