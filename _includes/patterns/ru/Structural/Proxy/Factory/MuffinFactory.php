<?php

namespace DesignPatterns\Structural\Proxy\Factory;

use DesignPatterns\Structural\Proxy\Factory\Product\Product;

/**
 * Class MuffinFactory
 * @package DesignPatterns\Structural\Proxy\Factory
 */
class MuffinFactory implements FactoryInterface
{
    /**
     * @return Product
     */
    public function getProduct(): Product
    {
        return new Product();
    }
}
