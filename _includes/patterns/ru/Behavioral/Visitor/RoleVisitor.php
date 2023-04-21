<?php

namespace DesignPatterns\Behavioral\Visitor;

/**
 * Class RoleVisitor
 * @package DesignPatterns\Behavioral\Visitor
 */
class RoleVisitor implements RoleVisitorInterface
{
    /**
     * @var Role[]
     */
    private $visited = [];

    /**
     * @param Group $role
     */
    public function visitGroup(Group $role)
    {
        $this->visited[] = $role;
    }

    /**
     * @param User $role
     *
     * @return void
     */
    public function visitUser(User $role)
    {
        $this->visited[] = $role;
    }

    /**
     * @return Role[]
     */
    public function getVisited(): array
    {
        return $this->visited;
    }
}
