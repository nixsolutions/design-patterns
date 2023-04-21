<?php

namespace DesignPatterns\Structural\DataMapper;

use InvalidArgumentException;

/**
 * Class UserMapper
 * @package DesignPatterns\Structural\DataMapper
 */
class UserMapper
{
    /**
     * @var Storage
     */
    private $storage;

    /**
     * UserMapper constructor.
     *
     * @param Storage $storage
     */
    public function __construct(Storage $storage)
    {
        $this->storage = $storage;
    }

    /**
     * @param int $id
     *
     * @return User
     */
    public function findById(int $id): User
    {
        $result = $this->storage->find($id);

        if ($result === null) {
            throw new InvalidArgumentException('User #' . $id . ' not found');
        }

        return $this->mapRowToUser($result);
    }

    /**
     * @param array $row
     *
     * @return User
     */
    private function mapRowToUser(array $row): User
    {
        return User::fromState($row);
    }
}
