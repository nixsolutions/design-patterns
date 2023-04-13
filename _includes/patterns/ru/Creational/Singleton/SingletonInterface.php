<?php

namespace DesignPatterns\Creational\Singleton;

/**
 * Interface SingletonInterface
 * @package DesignPatterns\Creational\Singleton
 */
interface SingletonInterface
{
    /**
     * @return SingletonInterface
     */
    public static function getInstance(): SingletonInterface;
}
