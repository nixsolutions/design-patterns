<?php
namespace DesignPatterns\Structural\Bridge\Implementation;

/**
 * Interface CurrencyInterface
 * @package DesignPatterns\Structural\Bridge\Implementation
 */
interface CurrencyInterface
{
    /**
     * CurrencyInterface constructor.
     *
     * @param float $sumCash
     */
    public function __construct(float $sumCash);

    /**
     * @return string
     */
    public function getCurrencySymbol(): string;

    /**
     * @return float
     */
    public function getCurrencyRate(): float;

    /**
     * @return float
     */
    public function getSum(): float;
}
