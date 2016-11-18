<?php

namespace DesignPatterns\Structural\Proxy\Factory;

use DesignPatterns\Structural\Proxy\Factory\Product\Product;

/**
 * Interface FactoryInterface
 * @package DesignPatterns\Structural\Proxy\Factory
 */
interface FactoryInterface
{
    /**
     * @return Product
     */
    public function getProduct(): Product;
}
