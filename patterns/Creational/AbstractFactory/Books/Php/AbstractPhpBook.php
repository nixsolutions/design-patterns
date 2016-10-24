<?php
namespace DesignPatterns\Creational\AbstractFactory\Books\Php;

use DesignPatterns\Creational\AbstractFactory\Books\AbstractBook;

abstract class AbstractPhpBook extends AbstractBook
{
    protected $type = 'PHP';
}
