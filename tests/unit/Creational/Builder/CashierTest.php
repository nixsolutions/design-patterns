<?php
namespace DesignPatterns\Tests\Creational\Builder;

use DesignPatterns\Creational\Builder\Burger\ChickenBurgerBuilder;
use DesignPatterns\Creational\Builder\Burger\NewYorkBurgerBuilder;
use DesignPatterns\Creational\Builder\Director\Cashier;

class CashierTest extends \PHPUnit_Framework_TestCase
{
    /** @var Cashier $cashier */
    private $cashier;

    protected function setUp()
    {
        $this->cashier = new Cashier();
    }

    public function testCanCreateBurgers()
    {
        $newYorkBurgerBuilder = new NewYorkBurgerBuilder();
        $chickenBurgerBuilder = new ChickenBurgerBuilder();

        $this->assertInstanceOf(
            'DesignPatterns\Creational\Builder\Burger\AbstractBurgerBuilder',
            $newYorkBurgerBuilder
        );
        $this->assertInstanceOf(
            'DesignPatterns\Creational\Builder\Burger\AbstractBurgerBuilder',
            $chickenBurgerBuilder
        );

        $newYorkBurger = $this->cashier->buildBurger($newYorkBurgerBuilder);
        $chickenBurger = $this->cashier->buildBurger($chickenBurgerBuilder);

        $this->assertInstanceOf('DesignPatterns\Creational\Builder\Burger\Burger', $newYorkBurger);
        $this->assertInstanceOf('DesignPatterns\Creational\Builder\Burger\Burger', $chickenBurger);
        $this->assertNotSame($newYorkBurger, $chickenBurger);
    }
}
