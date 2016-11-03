<?php
namespace DesignPatterns\Creational\Prototype;

class BoxPrototype
{
    /**
     * @var string
     */
    protected $title;

    public function __construct($delay = false)
    {
        if (true === $delay) {
            sleep(1);
        }
    }

    public function __clone()
    {
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }
}
