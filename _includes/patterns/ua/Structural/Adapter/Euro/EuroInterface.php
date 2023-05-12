<?php

namespace DesignPatterns\Structural\Adapter\Euro;

/**
 * Interface EuroInterface
 * @package DesignPatterns\Structural\Adapter\Euro
 */
interface EuroInterface
{
    /**
     * @return float
     */
    public function getCash(): float;
}
