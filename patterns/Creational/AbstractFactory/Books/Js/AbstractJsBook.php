<?php
namespace DesignPatterns\Creational\AbstractFactory\Books\Js;

use DesignPatterns\Creational\AbstractFactory\Books\AbstractBook;

abstract class AbstractJsBook extends AbstractBook
{
    protected $type = 'JS';
}
