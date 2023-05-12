<?php

namespace DesignPatterns\Behavioral\State\States;

use Exception;

/**
 * Class EmptyState
 * @package DesignPatterns\Behavioral\State\States
 */
class EmptyState extends AbstractState
{
    const STATE = 'Empty';

    /**
     * @return FillState
     *
     * @throws Exception
     */
    public function onFilled(): FillState
    {
        if (static::STATE === $this->getGlassState()) {
            return new FillState($this->glass);
        }

        throw new Exception('Can\'t to fill filled glass.');
    }

    /**
     * @return EmptyState
     *
     * @throws Exception
     */
    public function onEmpty(): EmptyState
    {
        throw new Exception('Сan\'t pour the empty glass.');
    }
}
