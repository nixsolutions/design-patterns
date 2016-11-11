<?php
namespace DesignPatterns\Tests\Creational\Prototype;

use DesignPatterns\Creational\Prototype\BoxPrototype;

class PrototypeTest extends \PHPUnit_Framework_TestCase
{
    public function testPerformanceGetBoxWithDelay()
    {
        $start = $this->getTime();

        for ($i = 0; $i < 15; $i++) {
            $box = new BoxPrototype(true);
            $box->setTitle('BOX#' . $i);
            $this->assertInstanceOf('DesignPatterns\Creational\Prototype\BoxPrototype', $box);
        }

        $finish = $this->getTime();

        return $finish - $start;
    }

    /**
     * @depends testPerformanceGetBoxWithDelay
     *
     * @param int $testPerformanceInitWithNew
     */
    public function testPerformanceGetBoxWithClone(int $testPerformanceInitWithNew)
    {
        $start = $this->getTime();

        $boxPrototype = new BoxPrototype(true);

        for ($i = 0; $i < 15; $i++) {
            $box = clone $boxPrototype;
            $box->setTitle('BOX#' . $i);
            $this->assertInstanceOf('DesignPatterns\Creational\Prototype\BoxPrototype', $box);
        }

        $finish = $this->getTime();

        $testPerformanceInitWithClone = $finish - $start;

        $this->assertGreaterThan($testPerformanceInitWithClone, $testPerformanceInitWithNew);
    }

    private function getTime()
    {
        return (int)microtime(true);
    }
}
