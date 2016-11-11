<?php

namespace DesignPatterns\Creational\Prototype;

/**
 * Class BoxPrototype
 * @package DesignPatterns\Creational\Prototype
 */
class BoxPrototype
{
    /**
     * @var string
     */
    protected $title;

    /**
     * BoxPrototype constructor.
     *
     * If TRUE === delay, init object created 1 sec.
     *
     * @param bool $delay
     */
    public function __construct($delay = false)
    {
        if (true === $delay) {
            sleep(1);
        }
    }

    /**
     * All classes have the magic method __clone.
     * Implement this method if you want to change the default behavior.
     */
    public function __clone()
    {
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return void
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }
}
