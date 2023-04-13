<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

/**
 * Class Contract
 * @package DesignPatterns\Behavioral\ChainOfResponsibility
 */
class Contract
{
    /**
     * @var int
     */
    protected $importance;

    /**
     * @var string
     */
    protected $sign;

    /**
     * Contract constructor.
     *
     * @param int $importance
     */
    public function __construct(int $importance)
    {
        $this->importance = $importance;
    }

    /**
     * @return int
     */
    public function getImportance(): int
    {
        return $this->importance;
    }

    /**
     * @param string $name
     *
     * @return void
     */
    public function setSign(string $name)
    {
        $this->sign = $name;
    }

    /**
     * @return string
     */
    public function getSign()
    {
        return $this->sign;
    }
}
