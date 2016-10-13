<?php
namespace DesignPatterns\Creational\FactoryMethod;

class PhpBook implements BookInterface
{
    private $city;

    /**
     * PhpBook constructor.
     * @param string $city
     */
    public function __construct(string $city)
    {
        $this->setCity($city);
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    protected function setCity(string $city)
    {
        $this->city = $city;
    }
}
