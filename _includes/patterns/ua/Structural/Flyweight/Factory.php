<?php

namespace DesignPatterns\Structural\Flyweight;

use Countable;

/**
 * Class Factory
 * @package DesignPatterns\Structural\Flyweight
 */
class Factory implements Countable
{
    /**
     * @var array
     */
    protected $pool = [];

    /**
     * @param string $name
     *
     * @return TitleFlyweightInterface
     */
    public function get(string $name): TitleFlyweightInterface
    {
        if (!isset($this->pool[$name])) {
            $this->pool[$name] = new Title($name);
        }

        return $this->pool[$name];
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->pool);
    }
}
