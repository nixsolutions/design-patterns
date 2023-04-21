<?php

namespace DesignPatterns\Behavioral\State\States;

use DesignPatterns\Behavioral\State\Glass;

/**
 * Interface StateInterface
 * @package DesignPatterns\Behavioral\State\States
 */
interface StateInterface
{
    /**
     * StateInterface constructor.
     *
     * @param Glass $glass
     */
    public function __construct(Glass $glass);

    /**
     * @return FillState
     */
    public function onFilled(): FillState;

    /**
     * @return EmptyState
     */
    public function onEmpty(): EmptyState;
}
