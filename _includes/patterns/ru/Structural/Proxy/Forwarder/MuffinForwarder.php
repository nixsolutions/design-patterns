<?php

namespace DesignPatterns\Structural\Proxy\Forwarder;

use DesignPatterns\Structural\Proxy\AbstractPurchase;
use DesignPatterns\Structural\Proxy\Factory\FactoryInterface;
use DesignPatterns\Structural\Proxy\Factory\MuffinFactory;
use DesignPatterns\Structural\Proxy\Factory\Product\Product;

/**
 * Class MuffinForwarder
 * @package DesignPatterns\Structural\Proxy\Forwarder
 */
class MuffinForwarder extends AbstractPurchase
{
    const PARTY_SIZE = 20;

    /**
     * @var FactoryInterface
     */
    protected $factory = null;

    /**
     * @var Product[]
     */
    public $muffinPool = [];

    /**
     * @return FactoryInterface
     */
    protected function getFactory(): FactoryInterface
    {

        if (is_null($this->factory)) {
            $this->factory = new MuffinFactory();
        }

        return $this->factory;
    }

    /**
     * @return Product
     */
    public function getProduct(): Product
    {
        if (!count($this->muffinPool)) {
            $this->purchaseProducts();
        }

        return array_pop($this->muffinPool);
    }

    /**
     * @return void
     */
    public function purchaseProducts()
    {
        for ($i = 0; $i < self::PARTY_SIZE; $i++) {
            array_push(
                $this->muffinPool,
                $this->getFactory()->getProduct()
            );
        }

        $this->incrementCountPurchase();
    }
}
