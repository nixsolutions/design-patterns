<?php

namespace DesignPatterns\Tests\Behavioral\Strategy;

use DesignPatterns\Behavioral\Strategy\SimpleCalculator;
use DesignPatterns\Behavioral\Strategy\Strategies\AddStrategy;
use DesignPatterns\Behavioral\Strategy\Strategies\MultiplyStrategy;
use DesignPatterns\Behavioral\Strategy\Strategies\SubtractStrategy;
use PHPUnit_Framework_TestCase;

class StrategyTest extends PHPUnit_Framework_TestCase
{
    public function provideIntegersForAdd()
    {
        return [
            [2, 3, 5],
            [8, 3, 11],
            [-3, 5, 2],
            [23, -3, 20],
            [-42, -20, -62],
        ];
    }

    public function provideIntegersForSub()
    {
        return [
            [2, 3, -1],
            [8, 3, 5],
            [-3, 5, -8],
            [23, -3, 26],
            [-42, -20, -22],
        ];
    }

    public function provideIntegersForMulti()
    {
        return [
            [2, 3, 6],
            [8, 3, 24],
            [-3, 5, -15],
            [23, -3, -69],
            [-42, -20, 840],
        ];
    }

    /**
     * @dataProvider provideIntegersForAdd
     *
     * @param int $x
     * @param int $y
     * @param int $expected
     */
    public function testSimpleCalculatorWithAddStrategy(int $x, int $y, int $expected)
    {
        $simpleCalculator = new SimpleCalculator($x, $y);
        $simpleCalculator->setStrategy(new AddStrategy());

        $this->assertEquals($expected, $simpleCalculator->execute());
    }

    /**
     * @dataProvider provideIntegersForSub
     *
     * @param int $x
     * @param int $y
     * @param int $expected
     */
    public function testSimpleCalculatorWithSubtractStrategy(int $x, int $y, int $expected)
    {
        $simpleCalculator = new SimpleCalculator($x, $y);
        $simpleCalculator->setStrategy(new SubtractStrategy());

        $this->assertEquals($expected, $simpleCalculator->execute());
    }

    /**
     * @dataProvider provideIntegersForMulti
     *
     * @param int $x
     * @param int $y
     * @param int $expected
     */
    public function testSimpleCalculatorWithMultiplyStrategy(int $x, int $y, int $expected)
    {
        $simpleCalculator = new SimpleCalculator($x, $y);
        $simpleCalculator->setStrategy(new MultiplyStrategy());

        $this->assertEquals($expected, $simpleCalculator->execute());
    }
}
