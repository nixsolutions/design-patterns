<?php

namespace DesignPatterns\Behavioral\State;

use DesignPatterns\Behavioral\State\States\EmptyState;

class Glass
{
    protected $state;

    public function __construct()
    {
        $this->state = new EmptyState($this);
    }

    public function fill()
    {
        $this->state = $this->state->onFilled();
    }
    public function pour()
    {
        $this->state = $this->state->onEmpty();
    }

    public function getState()
    {
        return $this->state;
    }
}
