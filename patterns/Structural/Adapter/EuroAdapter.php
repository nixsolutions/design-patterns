<?php

namespace DesignPatterns\Structural\Adapter;

use DesignPatterns\Structural\Adapter\Dollar\DollarInterface;
use DesignPatterns\Structural\Adapter\Euro\EuroInterface;

class EuroAdapter implements DollarInterface
{
    const EXCHANGE_RATE = 0.9;

    protected $euroCash;

    public function __construct(EuroInterface $euroCash)
    {
        $this->euroCash = $euroCash;
    }

    /**
     * @return float
     */
    public function getCash(): float
    {
        return $this->euroCash->getCash() * self::EXCHANGE_RATE;
    }
}
