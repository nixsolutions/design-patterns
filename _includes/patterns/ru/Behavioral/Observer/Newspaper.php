<?php

namespace DesignPatterns\Behavioral\Observer;

use SplObserver;
use SplSubject;

/**
 * Class Newspaper
 * @package DesignPatterns\Behavioral\Observer
 */
class Newspaper implements SplSubject
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var SplObserver[]
     */
    protected $observers = [];

    /**
     * @var string
     */
    protected $content;

    /**
     * Newspaper constructor.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param SplObserver $observer
     *
     * @return void
     */
    public function attach(SplObserver $observer)
    {
        array_push($this->observers, $observer);
    }

    /**
     * @param SplObserver $observer
     *
     * @return void
     */
    public function detach(SplObserver $observer)
    {
        $key = array_search($observer, $this->observers, true);
        if ($key) {
            unset($this->observers[$key]);
        }
    }

    /**
     * @param $content
     *
     * @return void
     */
    public function breakOutNews($content)
    {
        $this->content = $content;
        $this->notify();
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content . '( ' . $this->name . ' )';
    }

    /**
     * @return void
     */
    public function notify()
    {
        foreach ($this->observers as $value) {
            $value->update($this);
        }
    }
}
