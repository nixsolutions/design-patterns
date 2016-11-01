<?php
namespace DesignPatterns\Creational\Pool;

/**
 * Interface WorkerInterface
 * @package DesignPatterns\Creational\Pool
 */
interface WorkerInterface
{
    public function __construct(int $workerNumber, $performance = null);

    public function run();
}
