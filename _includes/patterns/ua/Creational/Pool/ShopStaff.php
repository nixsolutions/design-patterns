<?php

namespace DesignPatterns\Creational\Pool;

use Countable;

/**
 * Class ShopStaff
 * @package DesignPatterns\Creational\Pool
 */
class ShopStaff implements Countable
{
    /**
     * @var Worker[]
     */
    private $occupiedWorkers = [];

    /**
     * @var Worker[]
     */
    private $freeWorkers = [];

    /**
     * @param bool $delay
     *
     * @return Worker
     */
    public function getWorker(bool $delay = null): Worker
    {
        $workerNumber = $this->count() + 1;

        if (!$this->getCountFreeWorkers()) {
            $worker = new Worker($workerNumber, $delay);
        } else {
            $worker = array_pop($this->freeWorkers);
        }

        $this->occupiedWorkers[$this->getHash($worker)] = $worker;

        return $worker;
    }

    /**
     * @param Worker $worker
     *
     * @return void
     */
    public function dispose(Worker $worker)
    {
        $key = $this->getHash($worker);

        if (isset($this->occupiedWorkers[$key])) {
            unset($this->occupiedWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return $this->getCountOccupiedWorkers() + $this->getCountFreeWorkers();
    }

    /**
     * @return int
     */
    public function getCountFreeWorkers(): int
    {
        return count($this->freeWorkers);
    }

    /**
     * @return int
     */
    public function getCountOccupiedWorkers(): int
    {
        return count($this->occupiedWorkers);
    }

    /**
     * @param Worker $worker
     *
     * @return string
     */
    private function getHash(Worker $worker): string
    {
        return spl_object_hash($worker);
    }
}
