<?php

namespace DesignPatterns\Behavioral\Iterator;

use Countable;
use Iterator;

/**
 * Class WorkersList
 * @package DesignPatterns\Behavioral\Iterator
 */
class WorkersList implements Iterator, Countable
{

    /**
     * @var Worker[]
     */
    protected $workers = [];
    /**
     * @var int
     */
    protected $currentIndex = 0;

    /**
     * @param Worker $worker
     */
    public function addWorker(Worker $worker)
    {
        $this->workers[] = $worker;
    }

    /**
     * @return Worker
     */
    public function current(): Worker
    {
        return $this->workers[$this->currentIndex];
    }

    /**
     * @return void
     */
    public function next()
    {
        $this->currentIndex++;
    }

    /**
     * @return int
     */
    public function key(): int
    {
        return $this->currentIndex;
    }

    /**
     * @return bool
     */
    public function valid(): bool
    {
        return isset($this->workers[$this->currentIndex]);
    }

    /**
     * @return void
     */
    public function rewind()
    {
        $this->currentIndex = 0;
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->workers);
    }
}
