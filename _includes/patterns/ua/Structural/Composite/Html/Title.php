<?php

namespace DesignPatterns\Structural\Composite\Html;

use DesignPatterns\Structural\Composite\Abstraction\Leaf;

/**
 * Class Title
 * @package DesignPatterns\Structural\Composite\Html
 */
class Title extends Leaf
{
    /**
     * @return string
     */
    public function render(): string
    {
        return $this->newLineStringPrepare('<title>' . $this->content . '</title>');
    }
}
