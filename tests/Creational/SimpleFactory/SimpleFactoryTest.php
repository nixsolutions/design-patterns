<?php
namespace DesignPatterns\Tests\Creational\SimpleFactory;

use DesignPatterns\Creational\SimpleFactory\SimpleFactory;
use PHPUnit_Framework_TestCase;

class SimpleFactoryTest extends PHPUnit_Framework_TestCase
{
    public function testInstanceOfNewbieSingleton()
    {
        $productA = SimpleFactory::create('ProductA');
        $productB = SimpleFactory::create('ProductB');
        $productC = SimpleFactory::create('ProductC');

        $this->assertInstanceOf('DesignPatterns\Creational\SimpleFactory\ProductA', $productA);
        $this->assertInstanceOf('DesignPatterns\Creational\SimpleFactory\ProductB', $productB);
        $this->assertInstanceOf('DesignPatterns\Creational\SimpleFactory\ProductC', $productC);
    }
}
