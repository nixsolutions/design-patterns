<?php
namespace DesignPatterns\Creational\Builder\Burger;

class Burger
{
    private $sauce;
    private $meat;
    private $muffin;

    /**
     * @param string $sauce
     */
    public function setSauce(string $sauce)
    {
        $this->sauce = $sauce;
    }

    /**
     * @param string $meat
     */
    public function setMeat(string $meat)
    {
        $this->meat = $meat;
    }

    /**
     * @param string $muffin
     */
    public function setMuffin(string $muffin)
    {
        $this->muffin = $muffin;
    }
}
