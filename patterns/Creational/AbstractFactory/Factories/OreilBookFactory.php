<?php
namespace DesignPatterns\Creational\AbstractFactory\Factories;

use DesignPatterns\Creational\AbstractFactory\Books\Php\AbstractPhpBook;
use DesignPatterns\Creational\AbstractFactory\Books\Php\OreilBook as OreilPhp;

use DesignPatterns\Creational\AbstractFactory\Books\Js\AbstractJsBook;
use DesignPatterns\Creational\AbstractFactory\Books\Js\OreilBook as OreilJs;

use DesignPatterns\Creational\AbstractFactory\Books\Mysql\AbstractMySQLBook;
use DesignPatterns\Creational\AbstractFactory\Books\Mysql\OreilBook as OreilMySql;

class OreilBookFactory extends AbstractBookFactory
{
    /**
     * @return AbstractPhpBook
     */
    public function createPHPBook(): AbstractPhpBook
    {
        return new OreilPhp();
    }

    /**
     * @return AbstractJsBook
     */
    public function createJSBook(): AbstractJsBook
    {
        return new OreilJs();
    }

    /**
     * @return AbstractMySQLBook
     */
    public function createMySQLBook(): AbstractMySQLBook
    {
        return new OreilMySql();
    }
}
