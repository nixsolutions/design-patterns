<?php

namespace DesignPatterns\Structural\Composite\Helper;

/**
 * Class NewLineHelper
 * @package DesignPatterns\Structural\Composite\Helper
 */
trait NewLineHelper
{
    /**
     * @param string $str
     *
     * @return string
     */
    protected function newLineStringPrepare(string $str): string
    {
        return $str . PHP_EOL;
    }
}
