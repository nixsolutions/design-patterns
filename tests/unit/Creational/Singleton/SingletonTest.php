<?php
namespace DesignPatterns\Tests\Creational\Singleton;

use DesignPatterns\Creational\Singleton\Cashbox;

class SingletonTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Cashbox
     */
    private $shopCashbox;

    protected function setUp()
    {
        $this->shopCashbox = Cashbox::getInstance();
    }

    public function testInstanceOfSingleton()
    {
        $this->assertInstanceOf('DesignPatterns\Creational\Singleton\Cashbox', $this->shopCashbox);
    }

    public function testUniqueProperty()
    {
        /**
         *First purchase
         */
        $this->shopCashbox->setCash(2);
        $this->assertEquals(2, $this->shopCashbox->getAllCash());

        /**
         * Second purchase
         */
        $this->shopCashbox->setCash(4);
        $this->assertEquals(2 + 4, $this->shopCashbox->getAllCash());

        /**
         * Seller have mistake
         */
        $this->shopCashbox->setCash(-3);
        $this->assertEquals(2 + 4 - 3, $this->shopCashbox->getAllCash());
    }
}
