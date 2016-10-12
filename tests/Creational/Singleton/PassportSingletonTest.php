<?php
namespace DesignPatterns\Tests\Creational\Singleton;

use DesignPatterns\Creational\Singleton\Advance\PassportSingleton;
use PHPUnit_Framework_TestCase;

class PassportSingletonTest extends PHPUnit_Framework_TestCase
{
    private $userIvan;

    protected function setUp()
    {
        $this->userIvan = PassportSingleton::getInstance();
    }

    public function testInstanceOfNewbieSingleton()
    {
        $this->assertInstanceOf('DesignPatterns\Creational\Singleton\Advance\PassportSingleton', $this->userIvan);
    }
}
