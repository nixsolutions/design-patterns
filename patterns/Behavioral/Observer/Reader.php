<?php

namespace DesignPatterns\Behavioral\Observer;

use SplObserver;
use SplSubject;

/**
 * Class Reader
 * @package DesignPatterns\Behavioral\Observer
 */
class Reader implements SplObserver
{
    /**
     * @var string
     */
    protected $name;

    /**
     * Reader constructor.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param SplSubject|Newspaper $subject
     */
    public function update(SplSubject $subject)
    {
        echo $this->name . ' is reading breakout news ' . $subject->getContent();
    }
}
