<?php

namespace DesignPatterns\Behavioral\Visitor;

/**
 * Interface RoleVisitorInterface
 * @package DesignPatterns\Behavioral\Visitor
 */
interface RoleVisitorInterface
{
    /**
     * @param User $role
     *
     * @return void
     */
    public function visitUser(User $role);

    /**
     * @param Group $role
     *
     * @return void
     */
    public function visitGroup(Group $role);
}
