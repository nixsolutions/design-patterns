<?php

namespace DesignPatterns\Structural\DataMapper;

/**
 * Class User
 * @package DesignPatterns\Structural\DataMapper
 */
class User
{
    /**
     * @var string
     */
    private $username;
    /**
     * @var string
     */
    private $email;

    /**
     * @param array $state
     *
     * @return User
     */
    public static function fromState(array $state): User
    {
        return new self(
            $state['username'],
            $state['email']
        );
    }

    /**
     * User constructor.
     *
     * @param string $username
     * @param string $email
     */
    public function __construct(string $username, string $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
}
