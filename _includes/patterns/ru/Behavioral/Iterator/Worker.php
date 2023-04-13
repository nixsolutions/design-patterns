<?php

namespace DesignPatterns\Behavioral\Iterator;

/**
 * Class Worker
 * @package DesignPatterns\Behavioral\Iterator
 */
class Worker
{
    /**
     * @var string
     */
    protected $name;

    /**
     * Worker constructor.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
