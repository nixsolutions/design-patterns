<?php
namespace DesignPatterns\Creational\AbstractFactory\Factories;

use DesignPatterns\Creational\AbstractFactory\Books\Php\PiterBook as PiterPhp;
use DesignPatterns\Creational\AbstractFactory\Books\Php\AbstractPhpBook;

use DesignPatterns\Creational\AbstractFactory\Books\Js\AbstractJsBook;
use DesignPatterns\Creational\AbstractFactory\Books\Js\PiterBook as PiterJs;

use DesignPatterns\Creational\AbstractFactory\Books\Mysql\AbstractMySQLBook;
use DesignPatterns\Creational\AbstractFactory\Books\Mysql\PiterBook as PiterMySql;

class PiterBookFactory extends AbstractBookFactory
{
    /**
     * @return AbstractPhpBook
     */
    public function createPHPBook(): AbstractPhpBook
    {
        return new PiterPhp();
    }

    public function createJSBook(): AbstractJsBook
    {
        return new PiterJs();
    }

    public function createMySQLBook(): AbstractMySQLBook
    {
        return new PiterMySql();
    }
}
