<?php

namespace DesignPatterns\Behavioral\Command;

class Lamp
{
    public function turnOn()
    {
        return 'I\'m bright and cheerful light.';
    }

    public function turnOff()
    {
        return 'I am quiet and peaceful shadow.';
    }
}
