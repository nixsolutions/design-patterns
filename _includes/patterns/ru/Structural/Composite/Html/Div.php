<?php

namespace DesignPatterns\Structural\Composite\Html;

use DesignPatterns\Structural\Composite\Abstraction\Composite;

/**
 * Class Div
 * @package DesignPatterns\Structural\Composite\Html
 */
class Div extends Composite
{
    /**
     * @var string
     */
    protected $document;

    /**
     * @return string
     */
    public function render(): string
    {
        $this->document = $this->newLineStringPrepare('<div>');

        foreach ($this->elements as $element) {
            $this->document .= $element->render();
        }

        $this->document .= $this->newLineStringPrepare('</div>');

        return $this->document;
    }
}
