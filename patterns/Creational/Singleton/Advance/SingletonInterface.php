<?php
namespace DesignPatterns\Creational\Singleton\Advance;

/**
 * Interface SingletonInterface
 * @package DesignPatterns\Creational\Singleton\Advance
 */
interface SingletonInterface
{
    public function __construct();

    public function __clone();

    public function __wakeup();

    /**
     * @return SingletonInterface
     */
    public static function getInstance(): SingletonInterface;
}
