<?php
namespace DesignPatterns\Creational\AbstractFactory\Books\Mysql;

use DesignPatterns\Creational\AbstractFactory\Context\PiterBookContext;

class PiterBook extends AbstractMySQLBook
{
    use PiterBookContext;
}
