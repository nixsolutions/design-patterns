<?php

namespace DesignPatterns\Structural\Composite\Abstraction;

use DesignPatterns\Structural\Composite\Helper\NewLineHelper;

/**
 * Class Leaf
 * @package DesignPatterns\Structural\Composite\Abstraction
 */
abstract class Leaf implements CompositeInterface
{
    use NewLineHelper;

    /**
     * @var string
     */
    protected $content;

    /**
     * Leaf constructor.
     *
     * @param string $content
     */
    public function __construct(string $content)
    {
        $this->content = $content;
    }

    /**
     * @param CompositeInterface $element
     *
     * @return void
     */
    public function addElement(CompositeInterface $element)
    {
    }

    /**
     * @return string
     */
    abstract public function render(): string;
}
