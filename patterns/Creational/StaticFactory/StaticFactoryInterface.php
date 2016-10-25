<?php
namespace DesignPatterns\Creational\StaticFactory;

use DesignPatterns\Creational\StaticFactory\Books\AbstractBook;

interface StaticFactoryInterface
{
    public static function build(string $bookName): AbstractBook;
}
