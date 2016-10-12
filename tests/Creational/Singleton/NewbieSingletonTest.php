<?php
namespace DesignPatterns\Tests\Creational\Singleton;

use DesignPatterns\Creational\Singleton\Newbie\NewbieSingleton;
use PHPUnit_Framework_TestCase;

class NewbieSingletonTest extends PHPUnit_Framework_TestCase
{

    private $firstUser;
    private $secondUser;

    protected function setUp()
    {
        $this->firstUser = NewbieSingleton::getInstance();
        $this->secondUser = NewbieSingleton::getInstance();
    }

    public function testInstanceOfNewbieSingleton()
    {
        $this->assertInstanceOf('DesignPatterns\Creational\Singleton\Newbie\NewbieSingleton', $this->firstUser);
        $this->assertInstanceOf('DesignPatterns\Creational\Singleton\Newbie\NewbieSingleton', $this->secondUser);
    }

    public function testUniqueProperty()
    {
        $this->firstUser->setFirstName('Ivan');
        $this->firstUser->setLastName('Ivanov');

        $this->secondUser->setFirstName('Petr');
        $this->secondUser->setLastName('Petrov');

        $this->assertEquals($this->firstUser->getFirstName(), $this->secondUser->getFirstName());
        $this->assertEquals($this->firstUser->getLastName(), $this->secondUser->getLastName());
    }
}
