<?php
namespace DesignPatterns\Creational\Builder\Burger;

class ChickenBurgerBuilder extends AbstractBurgerBuilder
{

    public function buildSauce()
    {
        $this->burger->setSauce('soft');
    }

    public function buildMeat()
    {
        $this->burger->setMeat('chicken');
    }

    public function buildMuffin()
    {
        $this->burger->setMuffin('corn muffin');
    }
}
