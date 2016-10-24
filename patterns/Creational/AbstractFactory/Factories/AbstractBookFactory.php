<?php
namespace DesignPatterns\Creational\AbstractFactory\Factories;

use DesignPatterns\Creational\AbstractFactory\Books\Js\AbstractJsBook;
use DesignPatterns\Creational\AbstractFactory\Books\MySQL\AbstractMySQLBook;
use DesignPatterns\Creational\AbstractFactory\Books\PHP\AbstractPhpBook;

abstract class AbstractBookFactory
{
    abstract public function createPHPBook(): AbstractPhpBook;
    abstract public function createJSBook(): AbstractJsBook;
    abstract public function createMySQLBook(): AbstractMySQLBook;
}
