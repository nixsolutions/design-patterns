<?php

namespace DesignPatterns\Creational\FactoryMethod;


abstract class BookFactory extends FactoryMethod
{
    const CITY = '';

    /**
     * @param string $type
     * @return BookInterface
     */
    protected function createBook(string $type): BookInterface
    {
        switch ($type) {
            case static::PHP:
                return new PhpBook(static::CITY);
            case static::JS:
                return new JsBook(static::CITY);
            default:
                throw new \InvalidArgumentException("$type is not valid book type.");
        }
    }
}
