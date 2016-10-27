<?php
namespace DesignPatterns\Tests\Creational\Prototype;

use DesignPatterns\Creational\Prototype\ClassicBook;
use DesignPatterns\Creational\Prototype\ModernBook;

class AbstractBookPrototypeTest extends \PHPUnit_Framework_TestCase
{
    public function testCanGetFooBook()
    {
        $classicPrototype = new ClassicBook();
        $modernPrototype = new ModernBook();

        for ($i = 0; $i < 10; $i++) {
            $book = clone $classicPrototype;
            $book->setTitle('Classic Book No ' . $i);
            $this->assertInstanceOf('DesignPatterns\Creational\Prototype\ClassicBook', $book);
        }

        for ($i = 0; $i < 5; $i++) {
            $book = clone $modernPrototype;
            $book->setTitle('Modern Book No ' . $i);
            $this->assertInstanceOf('DesignPatterns\Creational\Prototype\ModernBook', $book);
        }
    }
}
