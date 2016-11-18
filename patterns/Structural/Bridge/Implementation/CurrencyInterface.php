<?php
namespace DesignPatterns\Structural\Bridge\Implementation;

interface CurrencyInterface
{
    public function __construct(float $sumCash);

    public function getCurrencySymbol(): string;

    public function getCurrencyRate(): string;

    public function getSum(): float;
}
