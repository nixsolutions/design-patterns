<?php

namespace DesignPatterns\Creational\AbstractFactory\Burgers;

class Cheeseburger extends AbstractBurger
{
    protected $meat = 'chicken';
    protected $sauce = 'mayonnaise';
    protected $withCheese = true;
}
