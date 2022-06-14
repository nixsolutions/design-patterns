<?php

namespace DesignPatterns\Tests\Creational\Singleton;

use DesignPatterns\Creational\Singleton\Cashbox;
use PHPUnit_Framework_TestCase;

/**
 * Class SingletonTest
 * @package DesignPatterns\Tests\Creational\Singleton
 */
class SingletonTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Cashbox
     */
    protected $shopCashbox;

    protected function setUp(): void
    {
        $this->shopCashbox = Cashbox::getInstance();
    }

    public function testInstanceOfSingleton()
    {
        $this->assertInstanceOf('DesignPatterns\Creational\Singleton\Cashbox', $this->shopCashbox);
    }

    public function testUniquePropertyFirstPurchase(): int
    {
        $sumPurchases = 2;
        $this->shopCashbox->setCash($sumPurchases);

        $this->assertEquals($sumPurchases, $this->shopCashbox->getAllCash());

        return $sumPurchases;
    }

    /**
     * @depends testUniquePropertyFirstPurchase
     *
     * @param int $sumPurchases
     *
     * @return int
     */
    public function testUniquePropertySecondPurchase(int $sumPurchases): int
    {
        $secondPurchase = 4;
        $this->shopCashbox->setCash($secondPurchase);
        $sumPurchases += $secondPurchase;

        $this->assertEquals($sumPurchases, $this->shopCashbox->getAllCash());

        return $sumPurchases;
    }

    /**
     * @depends testUniquePropertySecondPurchase
     *
     * @param int $sumPurchases
     */
    public function testUniquePropertySellerHaveMistake(int $sumPurchases)
    {
        $sellerMistake = -3;
        $this->shopCashbox->setCash($sellerMistake);
        $sumPurchases += $sellerMistake;

        $this->assertEquals($sumPurchases, $this->shopCashbox->getAllCash());
    }
}
