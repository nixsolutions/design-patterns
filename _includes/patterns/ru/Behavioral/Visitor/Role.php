<?php

namespace DesignPatterns\Behavioral\Visitor;

/**
 * Interface Role
 * @package DesignPatterns\Behavioral\Visitor
 */
interface Role
{
    /**
     * @param RoleVisitorInterface $visitor
     *
     * @return void
     */
    public function accept(RoleVisitorInterface $visitor);
}
