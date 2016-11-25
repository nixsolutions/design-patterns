<?php

namespace DesignPatterns\Tests\Behavioral\Observer;

use DesignPatterns\Behavioral\Observer\Newspaper;
use DesignPatterns\Behavioral\Observer\Reader;
use PHPUnit_Framework_TestCase;

class ObserverTest extends PHPUnit_Framework_TestCase
{
    public function testPostedNewsAndUserNotify()
    {
        $newspaper = new Newspaper('New York Times');
        $allen = new Reader('Allen');

        $newspaper->attach($allen);
        $newspaper->breakOutNews('Good news!');

        $this->expectOutputString('Allen is reading breakout news Good news!( New York Times )');
    }
}
