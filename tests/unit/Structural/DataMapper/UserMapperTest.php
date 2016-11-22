<?php

namespace DesignPatterns\Tests\Structural\DataMapper;

use DesignPatterns\Structural\DataMapper\Storage;
use DesignPatterns\Structural\DataMapper\UserMapper;
use InvalidArgumentException;
use PHPUnit_Framework_TestCase;

class DataMapperTest extends PHPUnit_Framework_TestCase
{
    public function testCanMapUserFromStorage()
    {
        $storage = new Storage(
            [
                1 => [
                    'username' => 'zyuzka',
                    'email'    => 'zyuzka@mail.com',
                ],
            ]
        );
        $mapper = new UserMapper($storage);

        $user = $mapper->findById(1);

        $this->assertInstanceOf('DesignPatterns\Structural\DataMapper\User', $user);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testWillNotMapInvalidData()
    {
        $storage = new Storage([]);
        $mapper = new UserMapper($storage);

        $mapper->findById(1);
    }
}
