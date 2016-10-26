<?php
namespace DesignPatterns\Creational\Singleton;

/**
 * Class SingletonTrait
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
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }
}
