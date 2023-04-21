<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

/**
 * Class Department
 * @package DesignPatterns\Behavioral\ChainOfResponsibility
 */
class Department extends AbstractDepartment
{
    /**
     * Department constructor.
     *
     * @param string $nameDepartment
     * @param int $importance
     * @param AbstractDepartment|null $parent
     */
    public function __construct(string $nameDepartment, int $importance, AbstractDepartment $parent = null)
    {
        $this->name = $nameDepartment;
        $this->importance = $importance;
        $this->parent = $parent;
    }

    /**
     * @param Contract $contract
     *
     * @return Contract
     */
    public function getSign(Contract $contract): Contract
    {
        if ($this->getImportance() < $contract->getImportance() && $this->parent) {
            return $this->parent->getSign($contract);
        }

        return $this->setSign($contract);
    }
}
