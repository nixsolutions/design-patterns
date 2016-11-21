<?php

namespace DesignPatterns\Structural\Composite\Abstraction;

use DesignPatterns\Structural\Composite\Helper\NewLineHelper;

/**
 * Class Composite
 * @package DesignPatterns\Structural\Composite\Abstraction
 */
abstract class Composite implements CompositeInterface
{
    use NewLineHelper;

    /**
     * @var CompositeInterface[]
     */
    protected $elements = [];

    /**
     * @param CompositeInterface $element
     *
     * @return void
     */
    public function addElement(CompositeInterface $element)
    {
        $this->elements[] = $element;
    }

    /**
     * @return string
     */
    abstract public function render(): string;
}
