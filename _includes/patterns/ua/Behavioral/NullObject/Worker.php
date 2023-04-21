<?php

namespace DesignPatterns\Behavioral\NullObject;

class Worker implements WorkerInterface
{
    const MSG = 'Worker make somethink';

    public function isNull(): bool
    {
        return false;
    }

    public function makeSomethink()
    {
        return self::MSG;
    }
}
