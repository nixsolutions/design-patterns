<?php
namespace DesignPatterns\Creational\Singleton\Advance;

/**
 * Class SingletonTrait
 * @package DesignPatterns\Creational\Singleton\Advance
 */
trait SingletonTrait
{
    protected static $instance = null;

    /**
     * @return SingletonInterface
     */
    public static function getInstance(): SingletonInterface
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }
}
