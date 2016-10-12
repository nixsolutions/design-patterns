<?php
namespace DesignPatterns\Creational\Singleton\Advance;

/**
 * Class SingletonAbstract
 * @package DesignPatterns\Creational\Singleton\Advance
 */
abstract class SingletonAbstract implements SingletonInterface
{
    use SingletonTrait;

    final public function __construct()
    {
    }

    final public function __clone()
    {
    }

    final public function __wakeup()
    {
    }
}
