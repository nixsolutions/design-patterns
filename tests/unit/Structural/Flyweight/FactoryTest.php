<?php

namespace DesignPatterns\Tests\Structural\Flyweight;

use DesignPatterns\Structural\Flyweight\Factory;
use PHPUnit_Framework_TestCase;

class FlyweightTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Factory
     */
    protected static $factory;

    public static function setUpBeforeClass():void
    {
        self::$factory = new Factory();
    }

    public function testCreateFirstTitle()
    {
        $firstTitle = self::$factory->get('first');
        $this->assertInstanceOf('DesignPatterns\Structural\Flyweight\TitleFlyweightInterface', $firstTitle);
    }

    public function testCreateSecondTitle()
    {
        $secondTitle = self::$factory->get('second');
        $this->assertInstanceOf('DesignPatterns\Structural\Flyweight\TitleFlyweightInterface', $secondTitle);
    }

    public function testSameFirstTitleObjects()
    {
        $firstTitle = self::$factory->get('first');
        $sameFirstTitle = self::$factory->get('first');
        $this->assertSame($firstTitle, $sameFirstTitle);
    }

    public function testSameSecondTitleObjects()
    {
        $secondTitle = self::$factory->get('second');
        $sameSecondTitle = self::$factory->get('second');
        $this->assertSame($secondTitle, $sameSecondTitle);
    }

    public function testPrint()
    {
        $firstTitle = self::$factory->get('first');
        $this->assertEquals('This is first title with color black.', $firstTitle->print('black'));
    }

    public function testFactoryCount()
    {
        $this->assertEquals(2, self::$factory->count());
    }
}
