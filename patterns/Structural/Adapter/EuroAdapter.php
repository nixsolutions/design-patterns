<?php

namespace DesignPatterns\Structural\Adapter;

use DesignPatterns\Structural\Adapter\Dollar\DollarInterface;
use DesignPatterns\Structural\Adapter\Euro\EuroInterface;

/**
 * Class EuroAdapter
 * @package DesignPatterns\Structural\Adapter
 */
class EuroAdapter implements DollarInterface
{
    const EXCHANGE_RATE = 0.9;

    /**
     * @var EuroInterface
     */
    protected $euroCash;

    /**
     * EuroAdapter constructor.
     *
     * @param EuroInterface $euroCash
     */
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
