<?php

namespace DesignPatterns\Tests\Behavioral\NullObject;

use DesignPatterns\Behavioral\NullObject\NullWorker;
use DesignPatterns\Behavioral\NullObject\Worker;
use DesignPatterns\Behavioral\NullObject\WorkerPool;

class WorkerPoolTest extends \PHPUnit_Framework_TestCase
{
    public function testNullObject()
    {
        $worker = new Worker();
        $pool = new WorkerPool($worker);

        $this->assertEquals(Worker::MSG, $pool->makeSomethink(0));
        $this->assertEquals(false, $worker->isNull());
        $this->assertEquals(false, $pool->getPool(0)->isNull());
        $this->assertEquals(NullWorker::MSG, $pool->makeSomethink(1));
        $this->assertEquals(true, $pool->getPool(1)->isNull());
    }
}
