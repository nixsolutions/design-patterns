<?php

namespace DesignPatterns\Behavioral\Mediator;

class Client extends Colleague
{
    public function request()
    {
        $this->mediator->makeRequest();
    }

    public function output(string $content)
    {
        echo $content;
    }
}
