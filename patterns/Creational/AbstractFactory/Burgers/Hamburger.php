<?php

namespace DesignPatterns\Creational\AbstractFactory\Burgers;

class Hamburger extends AbstractBurger
{
    protected $meat = 'beef';
    protected $sauce = 'ketchup';
    protected $withCheese = false;
}
