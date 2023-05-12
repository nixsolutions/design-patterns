<?php

namespace DesignPatterns\Behavioral\Command;

class TurnOffCommand implements CommandInterface
{
    /**
     * @var Lamp
     */
    protected $lamp;

    /**
     * @param Lamp $lamp
     */
    public function __construct(Lamp $lamp)
    {
        $this->lamp = $lamp;
    }

    public function execute()
    {
        return $this->lamp->turnOff();
    }
}
