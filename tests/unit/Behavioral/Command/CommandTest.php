<?php

namespace DesignPatterns\Tests\Behavioral\Command;

use DesignPatterns\Behavioral\Command\CommandRegistry;
use DesignPatterns\Behavioral\Command\Lamp;
use DesignPatterns\Behavioral\Command\TurnOffCommand;
use DesignPatterns\Behavioral\Command\TurnOnCommand;
use PHPUnit_Framework_TestCase;

class CommandTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var CommandRegistry
     */
    protected static $registry;

    /**
     * @var Lamp
     */
    protected static $lamp;

    public static function setUpBeforeClass():void
    {
        self::$registry = new CommandRegistry();
        self::$lamp = new Lamp();
    }

    public function testAddCommandToRegistry()
    {
        self::$registry->add(new TurnOnCommand(self::$lamp), 'ON');
        self::$registry->add(new TurnOffCommand(self::$lamp), 'OFF');

        $this->assertEquals(2, self::$registry->count());
    }

    public function testTurnOnCommand()
    {
        self::$registry->add(new TurnOnCommand(self::$lamp), 'ON');
        $this->assertEquals(self::$lamp->turnOn(), self::$registry->get('ON')->execute());
    }

    public function testTurnOffCommand()
    {
        self::$registry->add(new TurnOffCommand(self::$lamp), 'OFF');
        $this->assertEquals(self::$lamp->turnOff(), self::$registry->get('OFF')->execute());
    }
}
