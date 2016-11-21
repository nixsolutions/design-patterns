<?php

namespace DesignPatterns\Structural\Composite\Html;

use DesignPatterns\Structural\Composite\Abstraction\Composite;

/**
 * Class Body
 * @package DesignPatterns\Structural\Composite\Html
 */
class Body extends Composite
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
        $this->document = $this->newLineStringPrepare('<body>');

        foreach ($this->elements as $element) {
            $this->document .= $element->render();
        }

        $this->document .= $this->newLineStringPrepare('</body>');

        return $this->document;
    }
}
