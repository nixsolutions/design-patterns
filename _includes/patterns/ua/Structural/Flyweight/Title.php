<?php

namespace DesignPatterns\Structural\Flyweight;

/**
 * Class Title
 * @package DesignPatterns\Structural\Flyweight
 */
class Title implements TitleFlyweightInterface
{
    /**
     * @var string
     */
    protected $name;

    /**
     * Contract constructor.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param string $color
     *
     * @return string
     */
    public function print(string $color): string
    {
        return sprintf('This is %s title with color %s.', $this->name, $color);
    }
}
