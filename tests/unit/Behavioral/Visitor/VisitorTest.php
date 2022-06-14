<?php

namespace DesignPatterns\Tests\Behavioral\Visitor;

use DesignPatterns\Behavioral\Visitor\Group;
use DesignPatterns\Behavioral\Visitor\Role;
use DesignPatterns\Behavioral\Visitor\RoleVisitor;
use DesignPatterns\Behavioral\Visitor\User;
use PHPUnit_Framework_TestCase;

class VisitorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var RoleVisitor
     */
    private $visitor;

    protected function setUp(): void
    {
        $this->visitor = new RoleVisitor();
    }

    public function provideRoles()
    {
        return [
            [new User('Dominik')],
            [new Group('Administrators')],
        ];
    }

    /**
     * @dataProvider provideRoles
     *
     * @param Role $role
     */
    public function testVisitSomeRole(Role $role)
    {
        $role->accept($this->visitor);
        $this->assertSame($role, $this->visitor->getVisited()[0]);
    }
}
