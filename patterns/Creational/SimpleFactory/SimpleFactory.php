<?php
namespace DesignPatterns\Creational\SimpleFactory;

class SimpleFactory implements SimpleFactoryInterface
{
    public static function create(string $productType): ProductInterface
    {
        $className = __NAMESPACE__ . '\\' .  $productType;
        return new $className;
    }
}
