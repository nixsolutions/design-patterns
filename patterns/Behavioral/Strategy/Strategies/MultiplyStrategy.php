<?php

namespace DesignPatterns\Behavioral\Strategy\Strategies;

/**
 * Class MultiplyStrategy
 * @package DesignPatterns\Behavioral\Strategy\Strategies
 */
class MultiplyStrategy implements StrategyInterface
{
    /**
     * @param int $x
     * @param int $y
     *
     * @return int
     */
    public function algorithm(int $x, int $y): int
    {
        return $x * $y;
    }
}
