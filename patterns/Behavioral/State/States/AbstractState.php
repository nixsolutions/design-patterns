<?php

namespace DesignPatterns\Behavioral\State\States;

use DesignPatterns\Behavioral\State\Glass;
use Exception;

/**
 * Class AbstractState
 * @package DesignPatterns\Behavioral\State\States
 */
abstract class AbstractState implements StateInterface
{
    const STATE = null;

    /**
     * @var Glass
     */
    protected $glass;

    /**
     * AbstractState constructor.
     *
     * @param Glass $glass
     */
    public function __construct(Glass $glass)
    {
        $this->glass = $glass;
    }

    /**
     * @return string
     */
    protected function getGlassState(): string
    {
        $glassState = $this->glass->getState();

        return $glassState::STATE;
    }

    /**
     * @return FillState
     *
     * @throws Exception
     */
    abstract public function onFilled(): FillState;

    /**
     * @return EmptyState
     *
     * @throws Exception
     */
    abstract public function onEmpty(): EmptyState;
}
