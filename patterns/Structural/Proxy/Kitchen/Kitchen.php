<?php

namespace DesignPatterns\Structural\Proxy\Kitchen;

use DesignPatterns\Structural\Proxy\AbstractPurchase;
use DesignPatterns\Structural\Proxy\Factory\Product\Product;
use DesignPatterns\Structural\Proxy\Forwarder\MuffinForwarder;

/**
 * Class Kitchen
 * @package DesignPatterns\Structural\Proxy\Kitchen
 */
class Kitchen extends AbstractPurchase
{

    const PARTY_SIZE = 5;

    /**
     * @var Product[]
     */
    public $muffinPool = [];

    /**
     * @var MuffinForwarder
     */
    protected $forwarder = null;

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
     * @return MuffinForwarder
     */
    public function getForwarder(): MuffinForwarder
    {
        if (is_null($this->forwarder)) {
            $this->forwarder = new MuffinForwarder();
        }

        return $this->forwarder;
    }

    /**
     * @return void
     */
    public function purchaseProducts()
    {
        for ($i = 0; $i < self::PARTY_SIZE; $i++) {
            array_push(
                $this->muffinPool,
                $this->getForwarder()->getProduct()
            );
        }

        $this->incrementCountPurchase();
    }
}
