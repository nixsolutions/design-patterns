<?php
namespace DesignPatterns\Creational\Builder\Burger;

abstract class AbstractBurgerBuilder implements BurgerBuilderInterface
{
    /**
     * @var Burger
     */
    protected $burger;

    public function createNewBurger()
    {
        $this->burger = new Burger();
    }

    /**
     * @return Burger
     */
    public function getBurger(): Burger
    {
        return $this->burger;
    }

    abstract public function buildSauce();

    abstract public function buildMeat();

    abstract public function buildMuffin();
}
