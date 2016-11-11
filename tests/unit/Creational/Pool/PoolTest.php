<?php

namespace DesignPatterns\Tests\Creational\Pool;

use DesignPatterns\Creational\Pool\ShopStaff;
use PHPUnit_Framework_TestCase;

class PoolTest extends PHPUnit_Framework_TestCase
{
    public function testCanShopStaffCreateNewWorkers()
    {
        $pool = new ShopStaff();
        $this->assertEquals(0, $pool->count(), 'Now pool don\'t have workers.');

        /**
         * Add to workers
         */
        for ($i = 0; $i < 5; $i++) {
            $pool->getWorker();
        }

        $this->assertEquals(5, $pool->count(), 'Now pool have two workers.');
    }

    public function testWorkersNotSame()
    {
        $pool = new ShopStaff();

        $firstWorker = $pool->getWorker();
        $secondWorker = $pool->getWorker();

        $this->assertEquals(2, $pool->count(), 'Now pool have two workers.');
        $this->assertInstanceOf('DesignPatterns\Creational\Pool\Worker', $firstWorker);
        $this->assertInstanceOf('DesignPatterns\Creational\Pool\Worker', $secondWorker);
        $this->assertNotSame($firstWorker, $secondWorker);
    }

    public function testGetWorkerNumberForFiveWorkers()
    {
        $pool = new ShopStaff();

        for ($i = 1; $i <= 5; $i++) {
            $worker = $pool->getWorker();
            $this->assertEquals('Hello. My number is ' . $i . '!', $worker->run(), 'Worker have right number.');
        }
    }

    public function testCountFreeAndOccupiedWorkers()
    {
        $pool = new ShopStaff();

        for ($i = 0; $i < 5; $i++) {
            $pool->getWorker();
        }

        $this->assertEquals(5, $pool->count(), 'Now pool have five workers.');
        $this->assertEquals(5, $pool->getCountOccupiedWorkers(), 'Now pool have five occupied workers.');
        $this->assertEquals(0, $pool->getCountFreeWorkers(), 'Now pool don\'t have free workers.');
    }

    public function testDisposeWorker()
    {
        $pool = new ShopStaff();

        $firstWorker = $pool->getWorker();
        $pool->getWorker();
        $pool->getWorker();

        $this->assertEquals(3, $pool->getCountOccupiedWorkers(), 'Now pool have three occupied workers.');
        $this->assertEquals(0, $pool->getCountFreeWorkers(), 'Now pool don\'t have free workers.');

        $pool->dispose($firstWorker);

        $this->assertEquals(2, $pool->getCountOccupiedWorkers(), 'Now pool have two occupied workers.');
        $this->assertEquals(1, $pool->getCountFreeWorkers(), 'Now pool have one free worker.');
    }

    public function testPerformancePoolPattern()
    {
        $pool = new ShopStaff();

        /**
         * Start initialization new workers with timers.
         */
        $start = $this->getTime();

        $firstWorker = $pool->getWorker(true);
        $secondWorker = $pool->getWorker(true);
        $thirdWorker = $pool->getWorker(true);

        $finish = $this->getTime();

        $timeWithInitial = $finish - $start;

        /**
         * Dispose all workers
         */
        $pool->dispose($firstWorker);
        $pool->dispose($secondWorker);
        $pool->dispose($thirdWorker);

        /**
         * Get free workers with timers.
         */
        $start = $this->getTime();

        $pool->getWorker(true);
        $pool->getWorker(true);
        $pool->getWorker(true);

        $finish = $this->getTime();

        $timeWitOutInitial = $finish - $start;

        $this->assertGreaterThan(
            $timeWitOutInitial,
            $timeWithInitial,
            'Time initialization workers longer than the time without initialization.'
        );
    }

    private function getTime()
    {
        return (int)microtime(true);
    }
}
