<?php
namespace DesignPatterns\Tests\Structural\Decorator;

use DesignPatterns\Structural\Decorator\Burgers\Cheeseburger;
use DesignPatterns\Structural\Decorator\CheeseburgerCheeseDecorator;
use DesignPatterns\Structural\Decorator\CheeseburgerSauceDecorator;

class DecoratorTest extends \PHPUnit_Framework_TestCase
{
    public function testAddCheeseDecorator()
    {
        $cheeseburger = new Cheeseburger();
        $cheeseDecorator = new CheeseburgerCheeseDecorator($cheeseburger);

        $this->assertArrayNotHasKey('cheese', $cheeseburger->makeBurger());
        $this->assertArrayHasKey('cheese', $cheeseDecorator->makeBurger());
    }

    public function testAddSauceDecorator()
    {
        $cheeseburger = new Cheeseburger();
        $sauceDecorator = new CheeseburgerSauceDecorator($cheeseburger);

        $cheeseburger = $cheeseburger->makeBurger();
        $decorateCheeseburger = $sauceDecorator->makeBurger();

        $this->assertArrayHasKey('sauce', $cheeseburger);
        $this->assertArrayHasKey('sauce', $decorateCheeseburger);

        $this->assertEquals('mayonnaise', $cheeseburger['sauce']);
        $this->assertNotEquals('mayonnaise', $decorateCheeseburger['sauce']);
        $this->assertEquals($sauceDecorator::NEW_SAUCE, $decorateCheeseburger['sauce']);
    }

    public function testAddSauceAndCheeseDecorator()
    {
        $cheeseburger = new Cheeseburger();
        $cheeseDecorator = new CheeseburgerCheeseDecorator($cheeseburger);
        $sauceDecorator = new CheeseburgerSauceDecorator($cheeseDecorator);

        $decorateCheeseburger = $sauceDecorator->makeBurger();

        $this->assertArrayHasKey('cheese', $decorateCheeseburger);

        $this->assertArrayHasKey('cheese', $decorateCheeseburger);
        $this->assertEquals($sauceDecorator::NEW_SAUCE, $decorateCheeseburger['sauce']);
    }
}
