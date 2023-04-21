<?php

namespace DesignPatterns\Behavioral\Memento;

/**
 * Class Save
 * @package DesignPatterns\Behavioral\Memento
 */
class Save
{
    /**
     * @var int
     */
    protected $hp;

    /**
     * Save constructor.
     *
     * @param int $hp
     */
    public function __construct(int $hp)
    {
        $this->hp = $hp;
    }

    /**
     * @return int
     */
    public function getState()
    {
        return $this->hp;
    }
}
