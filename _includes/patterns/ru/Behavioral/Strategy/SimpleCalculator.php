<?php

namespace DesignPatterns\Behavioral\Strategy;

use DesignPatterns\Behavioral\Strategy\Strategies\StrategyInterface;

/**
 * Class SimpleCalculator
 * @package DesignPatterns\Behavioral\Strategy
 */
class SimpleCalculator
{
    /**
     * @var int
     */
    private $x;

    /**
     * @var int
     */
    private $y;

    /**
     * @var StrategyInterface
     */
    private $strategy;

    /**
     * SimpleCalculator constructor.
     *
     * @param int $x
     * @param int $y
     */
    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @param StrategyInterface $strategy
     *
     * @return void
     */
    public function setStrategy(StrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * @return int
     */
    public function execute(): int
    {
        return $this->strategy->algorithm($this->x, $this->y);
    }
}
