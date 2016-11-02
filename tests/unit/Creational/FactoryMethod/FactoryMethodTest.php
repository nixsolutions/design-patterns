<?php

namespace DesignPatterns\Tests\Creational\FactoryMethod;

use DesignPatterns\Creational\FactoryMethod\Chef;
use InvalidArgumentException;

class FactoryMethodTest extends \PHPUnit_Framework_TestCase
{
    public function testWorkerInstanceOfFactoryMethodInterface()
    {
        $chef = new Chef();

        $this->assertInstanceOf('DesignPatterns\Creational\FactoryMethod\FactoryMethodInterface', $chef);
    }

    public function testHamburgerInstanceOfBurger()
    {
        $chef = new Chef();

        $hamburger = $chef->makeBurger('hamburger');
        $someHamburger = $chef->makeBurger('hamburger');

        $this->assertInstanceOf('DesignPatterns\Creational\FactoryMethod\Burgers\Burger', $hamburger);
        $this->assertInstanceOf('DesignPatterns\Creational\FactoryMethod\Burgers\Burger', $someHamburger);
        $this->assertNotSame($hamburger, $someHamburger);
    }

    public function testCheeseburgerInstanceOfBurger()
    {
        $chef = new Chef();

        $cheeseburger = $chef->makeBurger('cheeseburger');
        $someCheeseburger = $chef->makeBurger('cheeseburger');

        $this->assertInstanceOf('DesignPatterns\Creational\FactoryMethod\Burgers\Burger', $cheeseburger);
        $this->assertInstanceOf('DesignPatterns\Creational\FactoryMethod\Burgers\Burger', $someCheeseburger);
        $this->assertNotSame($cheeseburger, $someCheeseburger);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testException()
    {
        $chef = new Chef();

        $chef->makeBurger('someNameForBurger');
    }

    public function testHamburgerСomposition()
    {
        $chef = new Chef();

        $hamburger = $chef->makeBurger('hamburger');

        $hamburgerMeat = $hamburger->getMeat();
        $hamburgerSauce = $hamburger->getSauce();
        $hamburgerWithCheese = $hamburger->getWithCheese();

        $this->assertEquals('beef', $hamburgerMeat);
        $this->assertNotEquals('chicken', $hamburgerMeat);

        $this->assertEquals('ketchup', $hamburgerSauce);
        $this->assertNotEquals('mayonnaise', $hamburgerSauce);

        $this->assertEquals(false, $hamburgerWithCheese);
        $this->assertNotEquals(true, $hamburgerWithCheese);
    }

    public function testCheeseburgerСomposition()
    {
        $chef = new Chef();

        $cheeseburger = $chef->makeBurger('cheeseburger');

        $cheeseburgerMeat = $cheeseburger->getMeat();
        $cheeseburgerSauce = $cheeseburger->getSauce();
        $cheeseburgerWithCheese = $cheeseburger->getWithCheese();

        $this->assertEquals('chicken', $cheeseburgerMeat);
        $this->assertNotEquals('beef', $cheeseburgerMeat);

        $this->assertEquals('mayonnaise', $cheeseburgerSauce);
        $this->assertNotEquals('ketchup', $cheeseburgerSauce);

        $this->assertEquals(true, $cheeseburgerWithCheese);
        $this->assertNotEquals(false, $cheeseburgerWithCheese);
    }
}
