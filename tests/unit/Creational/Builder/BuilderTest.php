<?php
namespace DesignPatterns\Tests\Creational\Builder;

use DesignPatterns\Creational\Builder\Builders\CheeseburgerBuilder;
use DesignPatterns\Creational\Builder\Builders\HamburgerBuilder;
use DesignPatterns\Creational\Builder\Director\Chef;

class BuilderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Chef
     */
    private $chef;

    protected function setUp():void
    {
        $this->chef = new Chef();
    }

    public function testCanCreateHamburger()
    {
        $builder = new HamburgerBuilder();

        $hamburger = $this->chef->buildBurger($builder);

        $this->assertInstanceOf('DesignPatterns\Creational\Builder\Burger\Burger', $hamburger);
    }

    public function testCanCreateCheeseburger()
    {
        $builder = new CheeseburgerBuilder();

        $cheeseburger = $this->chef->buildBurger($builder);

        $this->assertInstanceOf('DesignPatterns\Creational\Builder\Burger\Burger', $cheeseburger);
    }
}
