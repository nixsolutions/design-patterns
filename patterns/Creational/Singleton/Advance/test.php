<?php


use DesignPatterns\Creational\Singleton\Advance\IvanPassport;

$vendorDirName = dirname(dirname(dirname(dirname(__DIR__)))) . '/vendor';
require_once $vendorDirName . '/autoload.php';


$test1 = IvanPassport::getInstance();
$test2 = IvanPassport::getInstance();
$test3 = IvanPassport::getInstance();

$test2->setFirstName('Petr');
$test3->setFirstName('Oleg');

var_dump($test1->getFirstName());
var_dump($test2->getFirstName());
var_dump($test3->getFirstName());
//TODO: TO DELETE
