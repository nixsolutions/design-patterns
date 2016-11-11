<?php
namespace DesignPatterns\Tests\Structural\Decorator;

use DesignPatterns\Structural\Decorator\Burgers\Cheeseburger;
use DesignPatterns\Structural\Decorator\CheeseburgerDecorator;

class DecoratorTest extends \PHPUnit_Framework_TestCase
{
    public function testDecorator()
    {
        $cheeseburger = new Cheeseburger();
        $cheeseburgerDecorator = new CheeseburgerDecorator($cheeseburger);

        $this->assertArrayNotHasKey('cheese', $cheeseburger->makeBurger());
        $this->assertArrayHasKey('cheese', $cheeseburgerDecorator->makeBurger());
    }
}
