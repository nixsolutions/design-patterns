<?php

namespace DesignPatterns\Structural\Registry;

class Registry
{

    /**
     * @var WorkerData[]
     */
    protected $workerDataRegistry = [];

    public function addWorker(string $key, WorkerData $workerData)
    {
        $key = $this->prepareKey($key);

        if (!key_exists($key, $this->workerDataRegistry)) {
            $this->workerDataRegistry[$key] = $workerData;
        } else {
            throw new \InvalidArgumentException('Worker with key: #' . $key . ' exists.');
        }
    }

    public function getWorker(string $key)
    {
        $key = $this->prepareKey($key);

        if (key_exists($key, $this->workerDataRegistry)) {
            return $this->workerDataRegistry[$key];
        } else {
            throw new \InvalidArgumentException('Worker with key: #' . $key . ' not exists.');
        }
    }

    private function prepareKey(string $key)
    {
        return trim(strtolower($key));
    }
}
