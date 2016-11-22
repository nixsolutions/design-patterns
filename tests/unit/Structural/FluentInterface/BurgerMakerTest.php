<?php

namespace DesignPatterns\Tests\Structural\FluentInterface;

use DesignPatterns\Structural\FluentInterface\BurgerMaker;
use PHPUnit_Framework_TestCase;

class BurgerMakerTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var BurgerMaker
     */
    protected static $burgerMaker;

    public static function setUpBeforeClass()
    {
        self::$burgerMaker = new BurgerMaker();
    }

    public function testBurgerSetMuffin()
    {
        $this->assertEquals(null, self::$burgerMaker->muffin);

        $maker = self::$burgerMaker->setMuffin('muffin');

        $this->assertEquals('muffin', self::$burgerMaker->muffin);
        $this->assertSame(self::$burgerMaker, $maker);
    }

    public function testBurgerSetSauce()
    {
        $this->assertEquals(null, self::$burgerMaker->sauce);

        $maker = self::$burgerMaker->setSauce('ketchup');

        $this->assertEquals('ketchup', self::$burgerMaker->sauce);
        $this->assertSame(self::$burgerMaker, $maker);
    }

    public function testBurgerSetMeat()
    {
        $this->assertEquals(null, self::$burgerMaker->meat);

        $maker = self::$burgerMaker->setMeat('beef');

        $this->assertEquals('beef', self::$burgerMaker->meat);
        $this->assertSame(self::$burgerMaker, $maker);
    }

    public function testBurgerSetCheese()
    {
        $this->assertEquals(null, self::$burgerMaker->cheese);

        $maker = self::$burgerMaker->setCheese('cheddar');

        $this->assertEquals('cheddar', self::$burgerMaker->cheese);
        $this->assertSame(self::$burgerMaker, $maker);
    }

    public function testBurgerGetBurger()
    {
        $this->assertEquals('muffin', self::$burgerMaker->muffin);
        $this->assertEquals('ketchup', self::$burgerMaker->sauce);
        $this->assertEquals('beef', self::$burgerMaker->meat);
        $this->assertEquals('cheddar', self::$burgerMaker->cheese);

        $burger = self::$burgerMaker
            ->setMuffin('muffin')
            ->setSauce('sauce')
            ->setMeat('meat')
            ->setCheese('cheese')
            ->getBurger();

        $this->assertArrayHasKey('muffin', $burger);
        $this->assertArrayHasKey('sauce', $burger);
        $this->assertArrayHasKey('meat', $burger);
        $this->assertArrayHasKey('cheese', $burger);

        $this->assertEquals('muffin', $burger['muffin']);
        $this->assertEquals('sauce', $burger['sauce']);
        $this->assertEquals('meat', $burger['meat']);
        $this->assertEquals('cheese', $burger['cheese']);

        $this->assertEquals(null, self::$burgerMaker->muffin);
        $this->assertEquals(null, self::$burgerMaker->sauce);
        $this->assertEquals(null, self::$burgerMaker->meat);
        $this->assertEquals(null, self::$burgerMaker->cheese);
    }
}
