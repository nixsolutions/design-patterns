<?php

namespace DesignPatterns\Behavioral\NullObject;

class NullWorker implements WorkerInterface
{
    const MSG = 'NULL OBJECT';

    public function isNull(): bool
    {
        return true;
    }

    public function makeSomethink()
    {
        return self::MSG;
    }
}
