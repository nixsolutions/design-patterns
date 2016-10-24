<?php
namespace DesignPatterns\Creational\AbstractFactory\Books\Mysql;

use DesignPatterns\Creational\AbstractFactory\Books\AbstractBook;

abstract class AbstractMySQLBook extends AbstractBook
{
    protected $type = 'MySQL';
}
