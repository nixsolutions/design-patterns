<?php

namespace DesignPatterns\Behavioral\TemplateMethod;

/**
 * Class Journey
 * @package DesignPatterns\Behavioral\TemplateMethod
 */
abstract class Journey
{
    /**
     * @var string[]
     */
    private $thingsToDo = [];

    /**
     * @return void
     */
    final public function takeATrip()
    {
        $this->thingsToDo[] = $this->buyAFlight();
        $this->thingsToDo[] = $this->takePlane();
        $this->thingsToDo[] = $this->enjoyVacation();
        $buyGift = $this->buyGift();

        if ($buyGift !== null) {
            $this->thingsToDo[] = $buyGift;
        }

        $this->thingsToDo[] = $this->takePlane();
    }

    /**
     * @return string
     */
    abstract protected function enjoyVacation(): string;

    /**
     * @return string|null
     */
    protected function buyGift()
    {
        return null;
    }

    /**
     * @return string
     */
    private function buyAFlight(): string
    {
        return 'Buy a flight ticket';
    }

    /**
     * @return string
     */
    private function takePlane(): string
    {
        return 'Taking the plane';
    }

    /**
     * @return string[]
     */
    public function getThingsToDo(): array
    {
        return $this->thingsToDo;
    }
}
