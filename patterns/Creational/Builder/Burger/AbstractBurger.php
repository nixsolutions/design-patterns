<?php

namespace DesignPatterns\Creational\Builder\Burger;

use DesignPatterns\Creational\Builder\Burger\Parts\AbstractPart;

/**
 * Class AbstractBurger
 * @package DesignPatterns\Creational\Builder\Burger
 */
abstract class AbstractBurger
{
    /**
     * @var AbstractPart[]
     */
    private $burgerParts = [];

    /**
     * @param string $partName
     * @param AbstractPart $partObject
     *
     * @return void
     */
    public function setBurgerParts(string $partName, AbstractPart $partObject)
    {
        $this->burgerParts[$partName] = $partObject;
    }
}
