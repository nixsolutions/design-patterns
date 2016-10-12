<?php
namespace DesignPatterns\Creational\SimpleFactory;

interface SimpleFactoryInterface
{
    public static function create(string $productType): ProductInterface;
}
