<?php
namespace DesignPatterns\Creational\Singleton\Advance;

/**
 * Class PassportSingleton
 * @package DesignPatterns\Creational\Singleton\Advance
 */
abstract class PassportSingletonAbstract extends SingletonAbstract
{
    protected $firstName;
    protected $lastName;
    protected $birthDay;
    protected $passportID;

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return static::$instance->firstName ?? 'First set first name.';
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName)
    {
        static::$instance->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return static::$instance->lastName ?? 'First set last name.';
    }

    public function setLastName(string $lastName)
    {
        static::$instance->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getBirthDay(): string
    {
        return static::$instance->birthDay ?? 'First set birthday.';
    }

    public function setBirthDay(string $birthday)
    {
        static::$instance->birthday = $birthday;
    }

    /**
     * @return string
     */
    public function getPassportID(): string
    {
        return static::$instance->passportID;
    }

    private function setPassportID()
    {
        static::$instance->passportID = uniqid();
    }

    /**
     * @return SingletonInterface
     */
    public static function getInstance(): SingletonInterface
    {
        $instance = parent::getInstance();
        if (!$instance->passportID) {
            $instance->setPassportID();
        }

        return $instance;
    }
}
