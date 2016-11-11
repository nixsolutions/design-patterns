<?php

namespace DesignPatterns\Creational\SimpleFactory\Burgers;

/**
 * Class Burger
 * @package DesignPatterns\Creational\SimpleFactory\Burgers
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
     * @var bool
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
     *
     * @return void
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
     *
     * @return void
     */
    public function setSauce(string $sauce)
    {
        $this->sauce = $sauce;
    }

    /**
     * @return bool
     */
    public function getWithCheese(): bool
    {
        return $this->withCheese;
    }

    /**
     * @param bool $withCheese
     *
     * @return void
     */
    public function setWithCheese(bool $withCheese)
    {
        $this->withCheese = $withCheese;
    }
}
