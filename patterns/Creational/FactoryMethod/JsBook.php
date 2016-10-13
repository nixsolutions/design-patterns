<?php
namespace DesignPatterns\Creational\FactoryMethod;

class JsBook implements BookInterface
{
    private $city;

    /**
     * BookInterface constructor.
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
    public function setCity(string $city)
    {
        $this->city = $city;
    }
}
