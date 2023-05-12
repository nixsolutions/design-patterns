<?php

namespace DesignPatterns\Structural\FluentInterface;

/**
 * Class BurgerMaker
 * @package DesignPatterns\Structural\FluentInterface
 */
class BurgerMaker
{
    /**
     * @var string
     */
    public $muffin;

    /**
     * @var string
     */
    public $sauce;

    /**
     * @var string
     */
    public $meat;

    /**
     * @var string
     */
    public $cheese;

    /**
     * @param string $muffin
     *
     * @return BurgerMaker
     */
    public function setMuffin($muffin): BurgerMaker
    {
        $this->muffin = $muffin;

        return $this;
    }

    /**
     * @param string $sauce
     *
     * @return BurgerMaker
     */
    public function setSauce($sauce)
    {
        $this->sauce = $sauce;

        return $this;
    }

    /**
     * @param string $meat
     *
     * @return BurgerMaker
     */
    public function setMeat($meat)
    {
        $this->meat = $meat;

        return $this;
    }

    /**
     * @param string $cheese
     *
     * @return BurgerMaker
     */
    public function setCheese($cheese)
    {
        $this->cheese = $cheese;

        return $this;
    }

    /**
     * @return array
     */
    public function getBurger(): array
    {
        $burger = [];

        foreach ($this as $valName => $val) {
            if ($val) {
                $burger[$valName] = $val;
            }
        }

        $this->clearWorkbench();

        return $burger;
    }

    /**
     * @return void
     */
    protected function clearWorkbench()
    {
        foreach ($this as $valName => $val) {
            $this->$valName = null;
        }
    }
}
