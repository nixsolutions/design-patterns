<?php
namespace DesignPatterns\Tests\Structural\Registry;

use DesignPatterns\Structural\Registry\Registry;
use DesignPatterns\Structural\Registry\WorkerData;
use InvalidArgumentException;

class RegistryTest extends \PHPUnit_Framework_TestCase
{
    private $ivanDataFixture = [
        'firstName' => 'ivan',
        'lastName'  => 'ivanov',
        'age'       => 21,
        'phone'     => 380936547896,
    ];

    private $petrDataFixture = [
        'firstName' => 'petr',
        'lastName'  => 'petrov',
        'age'       => 18,
        'phone'     => 380668524785,
    ];

    public function testCanSetUpWorkerToRegistry()
    {
        $ivanWorkerData = new WorkerData(
            $this->ivanDataFixture['firstName'],
            $this->ivanDataFixture['lastName'],
            $this->ivanDataFixture['age'],
            $this->ivanDataFixture['phone']
        );
        $petrWorkerData = new WorkerData(
            $this->petrDataFixture['firstName'],
            $this->petrDataFixture['lastName'],
            $this->petrDataFixture['age'],
            $this->petrDataFixture['phone']
        );

        $registry = new Registry();

        $registry->addWorker('Ivan', $ivanWorkerData);
        $registry->addWorker('Petr', $petrWorkerData);

        $this->assertInstanceOf('DesignPatterns\Structural\Registry\WorkerData', $registry->getWorker('Ivan'));
        $this->assertInstanceOf('DesignPatterns\Structural\Registry\WorkerData', $registry->getWorker('Petr'));
    }

    public function testException()
    {
        $this->expectException(InvalidArgumentException::class);
        $registry = new Registry();

        $ivanWorkerData = new WorkerData(
            $this->ivanDataFixture['firstName'],
            $this->ivanDataFixture['lastName'],
            $this->ivanDataFixture['age'],
            $this->ivanDataFixture['phone']
        );
        $petrWorkerData = new WorkerData(
            $this->petrDataFixture['firstName'],
            $this->petrDataFixture['lastName'],
            $this->petrDataFixture['age'],
            $this->petrDataFixture['phone']
        );

        $registry->addWorker('Ivan', $ivanWorkerData);
        $registry->addWorker('Ivan', $petrWorkerData);
    }
}
