<?php
namespace DesignPatterns\Tests\Structural\DependencyInjection;

use DesignPatterns\Structural\DependencyInjection\Worker;

class DependencyInjectionTest extends \PHPUnit_Framework_TestCase
{
    protected $cheeseburgerReturnDataFixture = [
        'muffin'     => 'muffin',
        'meat'       => 'chicken',
        'sauce'      => 'mayonnaise',
        'withCheese' => true,
    ];

    protected $hamburgerReturnDataFixture = [
        'muffin'     => 'muffin',
        'meat'       => 'beef',
        'sauce'      => 'ketchup',
        'withCheese' => false,
    ];

    public function testWorkerMakeHamburger()
    {
        $mockHamburger = $this->createMock(
            'DesignPatterns\Structural\DependencyInjection\BurgerInterface'
        );

        $mockHamburger->expects($this->any())
            ->method('getBurger')
            ->will($this->returnValue($this->hamburgerReturnDataFixture));

        $worker = new Worker($mockHamburger);
        $burger = $worker->getBurger();
        $this->assertEquals($this->hamburgerReturnDataFixture, $burger);
    }

    public function testWorkerMakeCheeseburger()
    {
        $mockCheeseburger = $this->createMock(
            'DesignPatterns\Structural\DependencyInjection\BurgerInterface'
        );

        $mockCheeseburger->expects($this->any())
            ->method('getBurger')
            ->will($this->returnValue($this->cheeseburgerReturnDataFixture));

        $worker = new Worker($mockCheeseburger);
        $burger = $worker->getBurger();
        $this->assertEquals($this->hamburgerReturnDataFixture, $burger);
    }
}
