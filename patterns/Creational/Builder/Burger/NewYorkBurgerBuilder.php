<?php
namespace DesignPatterns\Creational\Builder\Burger;

class NewYorkBurgerBuilder extends AbstractBurgerBuilder
{

    public function buildSauce()
    {
        $this->burger->setSauce('hot');
    }

    public function buildMeat()
    {
        $this->burger->setMeat('pork');
    }

    public function buildMuffin()
    {
        $this->burger->setMuffin('wheat muffin');
    }
}
