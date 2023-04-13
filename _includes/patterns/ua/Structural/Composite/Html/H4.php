<?php

namespace DesignPatterns\Structural\Composite\Html;

use DesignPatterns\Structural\Composite\Abstraction\Leaf;

/**
 * Class H4
 * @package DesignPatterns\Structural\Composite\Html
 */
class H4 extends Leaf
{
    /**
     * @return string
     */
    public function render(): string
    {
        return $this->newLineStringPrepare('<h4>' . $this->content . '</h4>');
    }
}
