<?php

namespace DesignPatterns\Structural\Composite\Html;

use DesignPatterns\Structural\Composite\Abstraction\Composite;
use DesignPatterns\Structural\Composite\Helper\NewLineHelper;

/**
 * Class Header
 * @package DesignPatterns\Structural\Composite\Html
 */
class Header extends Composite
{
    use NewLineHelper;

    /**
     * @var string
     */
    protected $document;

    /**
     * @return string
     */
    public function render(): string
    {
        $this->document = $this->newLineStringPrepare('<header>');

        foreach ($this->elements as $element) {
            $this->document .= $element->render();
        }

        $this->document .= $this->newLineStringPrepare('</header>');

        return $this->document;
    }
}
