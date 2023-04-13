<?php

namespace DesignPatterns\Behavioral\Memento;

/**
 * Class Player
 * @package DesignPatterns\Behavioral\Memento
 */
class Player
{
    const DIE_HP_COLOR = 'GREY';
    const LOW_HP_COLOR = 'RED';
    const MID_HP_COLOR = 'YELLOW';
    const HIGHT_HP_COLOR = 'GREEN';

    /**
     * @var int
     */
    protected $hp;

    /**
     * Player constructor.
     */
    public function __construct()
    {
        $this->hp = 100;
    }

    /**
     * @param int $hp
     *
     * @return void
     */
    public function getDamage(int $hp)
    {
        $this->hp -= $hp;
    }

    /**
     * @param int $hp
     *
     * @return void
     */
    public function getHeals(int $hp)
    {
        $this->hp += $hp;
    }

    /**
     * @return string
     */
    public function getColorHealthPointBar()
    {
        if ($this->hp > 70) {
            return self::HIGHT_HP_COLOR;
        }

        if ($this->hp <= 70 && $this->hp > 40) {
            return self::MID_HP_COLOR;
        }

        if ($this->hp <= 40 && $this->hp > 0) {
            return self::LOW_HP_COLOR;
        }

        return self::DIE_HP_COLOR;
    }

    /**
     * @param Save $memento
     *
     * @return void
     */
    public function setMemento(Save $memento)
    {
        $this->hp = $memento->getState();
    }

    /**
     * @return Save
     */
    public function getMemento()
    {
        return new Save($this->hp);
    }
}
