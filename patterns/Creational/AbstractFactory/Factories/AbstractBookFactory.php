<?php
namespace DesignPatterns\Creational\AbstractFactory\Factories;

use DesignPatterns\Creational\AbstractFactory\Books\Js\AbstractJsBook;
use DesignPatterns\Creational\AbstractFactory\Books\PHP\AbstractPhpBook;
use DesignPatterns\Creational\AbstractFactory\Books\MySQL\AbstractMySQLBook;

abstract class AbstractBookFactory
{
    /**
     * @return AbstractPhpBook
     */
    abstract public function createPHPBook(): AbstractPhpBook;

    /**
     * @return AbstractJsBook
     */
    abstract public function createJSBook(): AbstractJsBook;

    /**
     * @return AbstractMySQLBook
     */
    abstract public function createMySQLBook(): AbstractMySQLBook;
}
