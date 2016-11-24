<?php

namespace DesignPatterns\Tests\Behavioral\Mediator;

use DesignPatterns\Behavioral\Mediator\Client;
use DesignPatterns\Behavioral\Mediator\Database;
use DesignPatterns\Behavioral\Mediator\Mediator;
use DesignPatterns\Behavioral\Mediator\Server;
use PHPUnit_Framework_TestCase;

class MediatorTest extends PHPUnit_Framework_TestCase
{
    public function testOutputHelloWorld()
    {
        $client = new Client();
        new Mediator(new Database(), $client, new Server());

        $this->expectOutputString('Hello World');
        $client->request();
    }
}
