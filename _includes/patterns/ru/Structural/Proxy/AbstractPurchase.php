<?php

namespace DesignPatterns\Structural\Proxy;

/**
 * Class AbstractPurchase
 * @package DesignPatterns\Structural\Proxy
 */
abstract class AbstractPurchase
{
    public $muffinPurchaseCount = 0;

    /**
     * @return void
     */
    abstract public function purchaseProducts();

    /**
     * @return void
     */
    protected function incrementCountPurchase()
    {
        $this->muffinPurchaseCount++;
    }

    /**
     * @return int
     */
    public function getPartySize(): int
    {
        return static::PARTY_SIZE;
    }
}
