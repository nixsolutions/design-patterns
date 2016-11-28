<?php

namespace DesignPatterns\Behavioral\State\States;

use Exception;

/**
 * Class FillState
 * @package DesignPatterns\Behavioral\State\States
 */
class FillState extends AbstractState
{
    const STATE = 'Fill';

    /**
     * @throws Exception
     */
    public function onFilled(): FillState
    {
        throw new Exception('Can\'t to fill filled glass.');
    }

    /**
     * @return EmptyState
     *
     * @throws Exception
     */
    public function onEmpty(): EmptyState
    {
        if (static::STATE === $this->getGlassState()) {
            return new EmptyState($this->glass);
        }

        throw new Exception('Сan\'t pour the empty glass.');
    }
}
