<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

/**
 * Class AbstractDepartment
 * @package DesignPatterns\Behavioral\ChainOfResponsibility
 */
abstract class AbstractDepartment
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $importance;

    /**
     * @var AbstractDepartment
     */
    protected $parent;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getImportance(): string
    {
        return $this->importance;
    }

    /**
     * @return AbstractDepartment
     */
    public function getParent(): AbstractDepartment
    {
        return $this->parent;
    }

    /**
     * @param Contract $contract
     *
     * @return Contract
     */
    abstract public function getSign(Contract $contract): Contract;

    /**
     * @param Contract $contract
     *
     * @return Contract
     */
    protected function setSign(Contract $contract)
    {
        $contract->setSign($this->getName());

        return $contract;
    }
}
