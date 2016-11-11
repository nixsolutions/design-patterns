<?php

namespace DesignPatterns\Creational\Pool;

/**
 * Interface WorkerInterface
 * @package DesignPatterns\Creational\Pool
 */
interface WorkerInterface
{
    /**
     * WorkerInterface constructor.
     *
     * @param int $workerNumber
     * @param bool $performance
     */
    public function __construct(int $workerNumber, $performance = false);

    /**
     * @return string
     */
    public function run(): string;
}
