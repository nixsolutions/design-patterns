<?php
//TODO: Need rewrite
use DesignPatterns\Creational\Singleton\Advance\IvanPassport;

$vendorDirName = dirname(dirname(dirname(__DIR__))) . '/vendor';
require_once $vendorDirName . '/autoload.php';

writeln('BEGIN TESTING SINGLETON PATTERN');
writeln('');

writeln('Init passport for Ivan.');
writeln('Ivan passport: $ivanPassport = IvanPassport::getInstance();');
$ivanPassport = IvanPassport::getInstance();
writeln('First Name: ' . $ivanPassport->getFirstName());
writeln('Last Name: ' . $ivanPassport->getLastName());
writeln('Birthday: ' . $ivanPassport->getBirthDay());
writeln('');
