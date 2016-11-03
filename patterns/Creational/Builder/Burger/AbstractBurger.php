<?php

namespace DesignPatterns\Creational\Builder\Burger;

use DesignPatterns\Creational\Builder\Burger\Parts\AbstractPart;

abstract class AbstractBurger
{
    /**
     * @var array
     */
    private $burgerParts = [];

    /**
     * @param string $partName
     * @param AbstractPart $partObject
     */
    public function setBurgerParts(string $partName, AbstractPart $partObject)
    {
        $this->burgerParts[$partName] = $partObject;
    }
}
