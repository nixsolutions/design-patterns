<?php

namespace DesignPatterns\Creational\StaticFactory\Burgers;

/**
 * Class Burger
 * @package DesignPatterns\Creational\StaticFactory\Burgers
 */
abstract class Burger
{
    /**
     * @var string
     */
    protected $meat;

    /**
     * @var string
     */
    protected $sauce;

    /**
     * @var string
     */
    protected $withCheese;

    /**
     * @return string
     */
    public function getMeat(): string
    {
        return $this->meat;
    }

    /**
     * @param string $meat
     */
    public function setMeat(string $meat)
    {
        $this->meat = $meat;
    }

    /**
     * @return string
     */
    public function getSauce(): string
    {
        return $this->sauce;
    }

    /**
     * @param string $sauce
     */
    public function setSauce(string $sauce)
    {
        $this->sauce = $sauce;
    }

    /**
     * @return boolean
     */
    public function getWithCheese(): bool
    {
        return $this->withCheese;
    }

    /**
     * @param boolean $withCheese
     */
    public function setWithCheese(bool $withCheese)
    {
        $this->withCheese = $withCheese;
    }
}
