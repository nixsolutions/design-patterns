<?php
namespace DesignPatterns\Creational\AbstractFactory\Books\Mysql;

use DesignPatterns\Creational\AbstractFactory\Context\OreilBookContext;

class OreilBook extends AbstractMySQLBook
{
    use OreilBookContext;
}
