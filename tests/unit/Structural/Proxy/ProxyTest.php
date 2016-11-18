<?php
namespace DesignPatterns\Tests\Structural\Proxy;

use DesignPatterns\Structural\Proxy\Forwarder\MuffinForwarder;
use DesignPatterns\Structural\Proxy\Kitchen\Kitchen;

class ProxyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Kitchen
     */
    protected static $kitchen;

    public static function setUpBeforeClass()
    {
        self::$kitchen = new Kitchen();
    }

    public function testKitchenMuffinPoolEmpty()
    {
        $this->assertEquals(0, count(self::$kitchen->muffinPool));
    }

    public function testKitchenNotPurchaseMuffins()
    {
        $this->assertEquals(0, self::$kitchen->muffinPurchaseCount);
    }

    public function testKitchenGetForwarder()
    {
        $forwarder = self::$kitchen->getForwarder();
        $this->assertInstanceOf('DesignPatterns\Structural\Proxy\Forwarder\MuffinForwarder', $forwarder);
        $this->assertSame(self::$kitchen->getForwarder(), $forwarder);

        return $forwarder;
    }

    /**
     * @depends testKitchenGetForwarder
     *
     * @param MuffinForwarder $forwarder
     */
    public function testForwarderNotPurchaseMuffins(MuffinForwarder $forwarder)
    {
        $this->assertEquals(0, $forwarder->muffinPurchaseCount);
    }

    /**
     * @depends testKitchenGetForwarder
     *
     * @param MuffinForwarder $forwarder
     */
    public function testPurchase(MuffinForwarder $forwarder)
    {
        self::$kitchen->purchaseProducts();
        $this->assertEquals(self::$kitchen->getPartySize(), count(self::$kitchen->muffinPool));
        $this->assertEquals(1, self::$kitchen->muffinPurchaseCount);
        $this->assertEquals(1, $forwarder->muffinPurchaseCount);
    }

    public function testKitchenGetProduct()
    {
        $product = self::$kitchen->getProduct();
        $this->assertInstanceOf('DesignPatterns\Structural\Proxy\Factory\Product\Product', $product);
        $this->assertNotEquals(self::$kitchen->getPartySize(), count(self::$kitchen->muffinPool));
        $this->assertEquals(self::$kitchen->getPartySize() - 1, count(self::$kitchen->muffinPool));
    }
}
