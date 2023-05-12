<?php

namespace DesignPatterns\Tests\Creational\Multiton;

use DesignPatterns\Creational\Multiton\ShopCashSystem;
use PHPUnit_Framework_TestCase;

class MultitonTest extends PHPUnit_Framework_TestCase
{
    public function testUniqueness()
    {
        $firstCashbox = ShopCashSystem::getInstance('Cashbox#1');
        $secondCashbox = ShopCashSystem::getInstance('Cashbox#2');

        $this->assertInstanceOf('DesignPatterns\Creational\Multiton\MultitonInterface', $firstCashbox);
        $this->assertInstanceOf('DesignPatterns\Creational\Multiton\MultitonInterface', $secondCashbox);

        $this->assertNotSame($firstCashbox, $secondCashbox);

        $thirdCashbox = ShopCashSystem::getInstance('Cashbox#1');

        $this->assertSame($firstCashbox, $thirdCashbox);

        $firstCashbox->setCash(5);

        $this->assertSame($firstCashbox, $thirdCashbox);
    }
}
