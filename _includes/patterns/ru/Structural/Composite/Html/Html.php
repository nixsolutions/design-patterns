<?php

namespace DesignPatterns\Structural\Composite\Html;

use DesignPatterns\Structural\Composite\Abstraction\Composite;

/**
 * Class Html
 * @package DesignPatterns\Structural\Composite\Html
 */
class Html extends Composite
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
        $this->document = $this->newLineStringPrepare('<html>');

        foreach ($this->elements as $element) {
            $this->document .= $element->render();
        }

        $this->document .= $this->newLineStringPrepare('</html>');

        return $this->document;
    }
}
