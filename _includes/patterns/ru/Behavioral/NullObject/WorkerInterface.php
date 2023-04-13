<?php

namespace DesignPatterns\Behavioral\NullObject;

interface WorkerInterface
{
    public function isNull(): bool;
    public function makeSomethink();
}
