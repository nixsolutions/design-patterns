<?php

namespace DesignPatterns\Behavioral\Command;

use Countable;
use RuntimeException;

class CommandRegistry implements Countable
{
    /**
     * @var CommandInterface[]
     */
    private $registry = [];

    /**
     * @param string $type
     * @param CommandInterface $command
     */
    public function add(CommandInterface $command, string $type)
    {
        $this->registry[$type] = $command;
    }

    /**
     * @param string $type
     * @return CommandInterface
     * @throws RuntimeException
     */
    public function get($type)
    {
        if (!isset($this->registry[$type])) {
            throw new RuntimeException('Cannot find command ' . $type);
        }

        return $this->registry[$type];
    }

    public function count()
    {
        return count($this->registry);
    }
}
