<?php

namespace DesignPatterns\Behavioral\Iterator;

class IteratorTest extends \PHPUnit_Framework_TestCase
{
    public function testWorkerGetName()
    {
        $name = 'TestName';

        $worker = new Worker($name);
        $this->assertEquals($name, $worker->getName());
    }

    public function testCountList()
    {
        $ivanWorker = new Worker('Ivan');
        $petrWorker = new Worker('Petr');
        $andreyWorker = new Worker('Andrey');

        $workersList = new WorkersList();

        $workersList->addWorker($ivanWorker);
        $workersList->addWorker($petrWorker);
        $workersList->addWorker($andreyWorker);
        $this->assertCount(3, $workersList);
    }

    public function testWorkersListKey()
    {
        $workersList = new WorkersList();

        $this->assertEquals(0, $workersList->key());

        $workersList->next();
        $this->assertEquals(1, $workersList->key());

        $workersList->next();
        $this->assertEquals(2, $workersList->key());
    }

    public function testWorkersListValid()
    {
        $ivanWorker = new Worker('Ivan');
        $petrWorker = new Worker('Petr');
        $andreyWorker = new Worker('Andrey');

        $workersList = new WorkersList();

        $workersList->addWorker($ivanWorker);
        $workersList->addWorker($petrWorker);
        $workersList->addWorker($andreyWorker);

        $this->assertEquals(true, $workersList->valid());

        $workersList->next();
        $this->assertEquals(true, $workersList->valid());

        $workersList->next();
        $this->assertEquals(true, $workersList->valid());

        $workersList->next();
        $this->assertEquals(false, $workersList->valid());
    }

    public function testWorkersListResetKey()
    {
        $workersList = new WorkersList();

        $this->assertEquals(0, $workersList->key());

        $workersList->next();
        $this->assertEquals(1, $workersList->key());

        $workersList->next();
        $this->assertEquals(2, $workersList->key());

        $workersList->rewind();
        $this->assertEquals(0, $workersList->key());
    }

    public function testWorkerListCurrentWorker()
    {
        $ivanWorker = new Worker('Ivan');
        $petrWorker = new Worker('Petr');
        $andreyWorker = new Worker('Andrey');

        $workersList = new WorkersList();

        $workersList->addWorker($ivanWorker);
        $workersList->addWorker($petrWorker);
        $workersList->addWorker($andreyWorker);

        $this->assertSame($ivanWorker, $workersList->current());
        $workersList->next();
        $this->assertSame($petrWorker, $workersList->current());
        $workersList->next();
        $this->assertSame($andreyWorker, $workersList->current());
        $workersList->rewind();
        $this->assertSame($ivanWorker, $workersList->current());
    }
}
