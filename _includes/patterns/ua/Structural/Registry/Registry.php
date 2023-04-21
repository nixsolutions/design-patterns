<?php

namespace DesignPatterns\Structural\Registry;

use InvalidArgumentException;

/**
 * Class Registry
 * @package DesignPatterns\Structural\Registry
 */
class Registry
{

    /**
     * @var WorkerData[]
     */
    protected $workerDataRegistry = [];

    /**
     * @param string $key
     * @param WorkerData $workerData
     *
     * @return void
     * @throws InvalidArgumentException
     */
    public function addWorker(string $key, WorkerData $workerData)
    {
        $key = $this->prepareKey($key);

        if (!key_exists($key, $this->workerDataRegistry)) {
            $this->workerDataRegistry[$key] = $workerData;
        } else {
            throw new InvalidArgumentException('Worker with key: #' . $key . ' exists.');
        }
    }

    /**
     * @param string $key
     *
     * @return WorkerData
     */
    public function getWorker(string $key)
    {
        $key = $this->prepareKey($key);

        if (key_exists($key, $this->workerDataRegistry)) {
            return $this->workerDataRegistry[$key];
        } else {
            throw new \InvalidArgumentException('Worker with key: #' . $key . ' not exists.');
        }
    }

    /**
     * @param string $key
     *
     * @return string
     */
    private function prepareKey(string $key)
    {
        return trim(strtolower($key));
    }
}
