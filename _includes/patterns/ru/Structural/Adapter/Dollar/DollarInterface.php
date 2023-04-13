<?php

namespace DesignPatterns\Structural\Adapter\Dollar;

/**
 * Interface DollarInterface
 * @package DesignPatterns\Structural\Adapter\Dollar
 */
interface DollarInterface
{
    /**
     * @return float
     */
    public function getCash(): float;
}
