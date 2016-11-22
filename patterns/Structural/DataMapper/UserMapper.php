<?php

namespace DesignPatterns\Structural\DataMapper;

use InvalidArgumentException;

class UserMapper
{
    private $storage;

    public function __construct(Storage $storage)
    {
        $this->storage = $storage;
    }

    public function findById(int $id): User
    {
        $result = $this->storage->find($id);

        if ($result === null) {
            throw new InvalidArgumentException('User #' . $id . ' not found');
        }

        return $this->mapRowToUser($result);
    }

    private function mapRowToUser(array $row): User
    {
        return User::fromState($row);
    }
}
