<?php

namespace DesignPatterns\Behavioral\Mediator;

class Database extends Colleague
{
    public function getData(): string
    {
        return 'World';
    }
}
