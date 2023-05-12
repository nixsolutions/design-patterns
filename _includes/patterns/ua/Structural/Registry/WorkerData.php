<?php

namespace DesignPatterns\Structural\Registry;

/**
 * Class WorkerData
 * @package DesignPatterns\Structural\Registry
 */
class WorkerData
{
    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @var string
     */
    protected $fullName;

    /**
     * @var int
     */
    protected $age;

    /**
     * @var string
     */
    protected $phone;

    /**
     * WorkerData constructor.
     *
     * @param string $firstName
     * @param string $lastName
     * @param int $age
     * @param int $phone
     */
    public function __construct(string $firstName, string $lastName, int $age, int $phone)
    {
        $this->firstName = $this->prepareName($firstName);
        $this->lastName = $this->prepareName($lastName);
        $this->fullName = $this->setFullName();
        $this->age = $age;
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     *
     * @return void
     */
    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     *
     * @return void
     */
    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return $this->fullName;
    }

    /**
     * @return string
     */
    public function setFullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     *
     * @return void
     */
    public function setAge(int $age)
    {
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     *
     * @return void
     */
    public function setPhone(string $phone)
    {
        $this->phone = $phone;
    }

    /**
     * @param string $name
     *
     * @return string
     */
    private function prepareName(string $name)
    {
        return ucfirst(strtolower($name));
    }
}
