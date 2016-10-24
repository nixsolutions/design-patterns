<?php
namespace DesignPatterns\Creational\Builder\Burger;

interface BurgerBuilderInterface
{
    public function createNewBurger();

    public function getBurger(): Burger;

    public function buildSauce();

    public function buildMeat();

    public function buildMuffin();
}
