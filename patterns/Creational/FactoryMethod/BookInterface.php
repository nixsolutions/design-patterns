<?php
namespace DesignPatterns\Creational\FactoryMethod;

interface BookInterface
{
    /**
     * BookInterface constructor.
     * @param string $city
     */
    public function __construct(string $city);

    /**
     * @return string
     */
    public function getCity(): string;
}
