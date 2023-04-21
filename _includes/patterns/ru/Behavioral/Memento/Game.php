<?php

namespace DesignPatterns\Behavioral\Memento;

/**
 * Class Game
 * @package DesignPatterns\Behavioral\Memento
 */
class Game
{
    /**
     * @var Save
     */
    protected $save;

    /**
     * @param Player $player
     */
    public function makeSave(Player $player)
    {
        $this->save = $player->getMemento();
    }

    /**
     * @param Player $player
     */
    public function makeLoad(Player $player)
    {
        $player->setMemento($this->save);
    }
}
