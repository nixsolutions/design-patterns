<?php
namespace DesignPatterns\Tests\Creational\FactoryMethod;


use DesignPatterns\Creational\FactoryMethod\Factories\KharkivBookFactory;
use DesignPatterns\Creational\FactoryMethod\Factories\LvivBookFactory;
use PHPUnit_Framework_TestCase;

class KharkivFactoryTest extends PHPUnit_Framework_TestCase
{
    public function testBooksInstanceOfPhpBookAndJsBook()
    {
        $kharkivBookFactory = new KharkivBookFactory();

        $phpBook = $kharkivBookFactory->create('php');
        $jsBook = $kharkivBookFactory->create('js');

        $this->assertInstanceOf('DesignPatterns\Creational\FactoryMethod\Books\PhpBook', $phpBook);
        $this->assertInstanceOf('DesignPatterns\Creational\FactoryMethod\Books\JsBook', $jsBook);
    }

    public function testCityBookFactory()
    {
        $kharkivBookFactory = new KharkivBookFactory();
        $lvivBookFactory = new LvivBookFactory();

        $kharkivPhpBook = $kharkivBookFactory->create('php');
        $kharkivJsBook = $kharkivBookFactory->create('js');

        $lvivPhpBook = $lvivBookFactory->create('php');
        $lvivJsBook = $lvivBookFactory->create('js');

        $this->assertEquals($kharkivPhpBook->getCity(), 'Kharkiv');
        $this->assertEquals($kharkivJsBook->getCity(), 'Kharkiv');

        $this->assertEquals($lvivPhpBook->getCity(), 'Lviv');
        $this->assertEquals($lvivJsBook->getCity(), 'Lviv');
    }
}
