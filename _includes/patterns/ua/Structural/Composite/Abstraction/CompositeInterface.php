<?php

namespace DesignPatterns\Structural\Composite\Abstraction;

/**
 * Interface CompositeInterface
 * @package DesignPatterns\Structural\Composite\Abstraction
 */
interface CompositeInterface
{
    /**
     * @param CompositeInterface $element
     *
     * @return void
     */
    public function addElement(CompositeInterface $element);

    /**
     * @return string
     */
    public function render(): string;
}
