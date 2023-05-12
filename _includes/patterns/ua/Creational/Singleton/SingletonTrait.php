<?php

namespace DesignPatterns\Creational\Singleton;

/**
 * Trait SingletonTrait
 * @package DesignPatterns\Creational\Singleton
 */
trait SingletonTrait
{
    /**
     * @var SingletonInterface
     */
    protected static $instance;

    /**
     * @return SingletonInterface
     */
    final public static function getInstance(): SingletonInterface
    {
        if (!static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}
