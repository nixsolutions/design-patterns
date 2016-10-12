<?php

use DesignPatterns\Creational\Singleton\Newbie\NewbieSingleton;

$vendorDirName = dirname(dirname(dirname(__DIR__))) . '/vendor';
require_once $vendorDirName . '/autoload.php';

writeln('BEGIN TESTING SINGLETON PATTERN');
writeln('');

writeln('Init two users.');
writeln('First user: $firstUser = NewbieSingleton::getInstance();');
$firstUser = NewbieSingleton::getInstance();
writeln('Second user: $secondUser = NewbieSingleton::getInstance();');
$secondUser = NewbieSingleton::getInstance();
writeln('');

writeln('Setup first and last name for users.');
writeln('First user: Ivan Ivanov');

$firstUser->setFirstName('Ivan');
$firstUser->setLastName('Ivanov');

writeln('Second user: Petr Petrov');
$secondUser->setFirstName('Petr');
$secondUser->setLastName('Petrov');
writeln('');

writeln('Result:');
writeln('First user: ' . $firstUser->getFirstName() . ' ' . $firstUser->getLastName());
writeln('Second user: ' . $secondUser->getFirstName() . ' ' . $secondUser->getLastName());
writeln('');
