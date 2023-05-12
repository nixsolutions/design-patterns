<?php

namespace DesignPatterns\Structural\Flyweight;

/**
 * Interface TitleFlyweightInterface
 * @package DesignPatterns\Structural\Flyweight
 */
interface TitleFlyweightInterface
{
    /**
     * @param string $color
     *
     * @return string
     */
    public function print(string $color): string;
}
