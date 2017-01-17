<?php

namespace DesignPatterns\Behavioral\NullObject;

class WorkerPool
{
    /**
     * @var WorkerInterface[]
     */
    protected $pool = [];

    public function __construct(...$workers)
    {
        $this->pool = $workers;
    }

    public function getPool(int $key): WorkerInterface
    {
        return $this->pool[$key] ?? new NullWorker();
    }

    public function makeSomethink(int $key = null)
    {
        return $this->getPool($key)->makeSomethink();
    }
}
