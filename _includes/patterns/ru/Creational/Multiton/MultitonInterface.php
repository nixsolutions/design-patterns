<?php

namespace DesignPatterns\Creational\Multiton;

/**
 * Interface MultitonInterface
 * @package DesignPatterns\Creational\Multiton
 */
interface MultitonInterface
{
    /**
     * @param string $instanceName
     *
     * @return MultitonInterface
     */
    public static function getInstance(string $instanceName): self;
}
