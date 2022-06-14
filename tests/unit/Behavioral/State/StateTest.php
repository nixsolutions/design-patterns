<?php

namespace DesignPatterns\Tests\Behavioral\State;

use DesignPatterns\Behavioral\State\Glass;
use Exception;
use PHPUnit_Framework_TestCase;

class StateTest extends PHPUnit_Framework_TestCase
{
    public function testTryGlassInit()
    {
        $glass = new Glass();
        $this->assertInstanceOf('DesignPatterns\Behavioral\State\States\EmptyState', $glass->getState());

        $someGlass = new Glass();
        $this->assertNotInstanceOf('DesignPatterns\Behavioral\State\States\FillState', $someGlass->getState());
    }

    public function testTryFillGlass()
    {
        $glass = new Glass();
        $glass->fill();
        $this->assertInstanceOf('DesignPatterns\Behavioral\State\States\FillState', $glass->getState());

        $glass->pour();
        $glass->fill();
        $this->assertInstanceOf('DesignPatterns\Behavioral\State\States\FillState', $glass->getState());
    }

    public function testTryPourGlass()
    {
        $glass = new Glass();
        $glass->fill();
        $glass->pour();
        $this->assertInstanceOf('DesignPatterns\Behavioral\State\States\EmptyState', $glass->getState());

        $glass->fill();
        $glass->pour();
        $this->assertInstanceOf('DesignPatterns\Behavioral\State\States\EmptyState', $glass->getState());
    }

    public function testExceptionTryFillFilledGlass()
    {
        $this->expectException(Exception::class);
        $glass = new Glass();
        $glass->fill();
        $glass->fill();
    }

    public function testExceptionTryPourTheEmptyGlass()
    {
        $this->expectException(Exception::class);
        $glass = new Glass();
        $glass->pour();
    }
}
