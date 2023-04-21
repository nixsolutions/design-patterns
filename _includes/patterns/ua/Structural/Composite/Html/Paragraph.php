<?php

namespace DesignPatterns\Structural\Composite\Html;

use DesignPatterns\Structural\Composite\Abstraction\Leaf;

/**
 * Class Paragraph
 * @package DesignPatterns\Structural\Composite\Html
 */
class Paragraph extends Leaf
{
    /**
     * @return string
     */
    public function render(): string
    {
        return $this->newLineStringPrepare('<p>' . $this->content . '</p>');
    }
}
