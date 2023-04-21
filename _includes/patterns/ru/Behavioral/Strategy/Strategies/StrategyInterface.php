<?php

namespace DesignPatterns\Behavioral\Strategy\Strategies;

/**
 * Interface StrategyInterface
 * @package DesignPatterns\Behavioral\Strategy\Strategies
 */
interface StrategyInterface
{
    /**
     * @param int $x
     * @param int $y
     *
     * @return int
     */
    public function algorithm(int $x, int $y): int;
}
