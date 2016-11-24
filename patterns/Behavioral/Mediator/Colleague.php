<?php

namespace DesignPatterns\Behavioral\Mediator;

abstract class Colleague
{
    /**
     * @var Mediator
     */
    protected $mediator;

    public function setMediator(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }
}
