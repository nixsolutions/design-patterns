<?php

namespace DesignPatterns\Creational\Pool;

/**
 * Class Worker
 * @package DesignPatterns\Creational\Pool
 */
class Worker implements WorkerInterface
{
    /**
     * @var int
     */
    protected $workerNumber;

    /**
     * Worker constructor.
     *
     * @param int $workerNumber
     * @param boolean $performance
     */
    public function __construct(int $workerNumber, $performance = false)
    {
        if ($performance) {
            $this->getDelay();
        }

        $this->setNumberWorker($workerNumber);
    }

    /**
     * @return string
     */
    public function run(): string
    {
        return 'Hello. My number is ' . $this->getNumberWorker() . '!';
    }

    /**
     * @return int
     */
    private function getNumberWorker(): int
    {
        return $this->workerNumber;
    }

    /**
     * @param int $workerNumber
     *
     * @return void
     */
    private function setNumberWorker(int $workerNumber)
    {
        $this->workerNumber = $workerNumber;
    }

    /**
     * Method for test performance Pool pattern.
     *
     * @return void
     */
    private function getDelay()
    {
        sleep(3);
    }
}
