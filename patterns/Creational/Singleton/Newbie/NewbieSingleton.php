<?php
namespace DesignPatterns\Creational\Singleton\Newbie;

/**
 * Class NewbieSingleton
 * @package DesignPatterns\Creational\Singleton\Newbie
 */
final class NewbieSingleton
{
    private static $instance;

    private $firstName;
    private $lastName;

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
    }


    /**
     * @return NewbieSingleton
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    public function __construct()
    {
    }

    public function __clone()
    {
    }

    public function __wakeup()
    {
    }
}
