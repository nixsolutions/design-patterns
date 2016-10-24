<?php
namespace DesignPatterns\Creational\AbstractFactory\Books;

abstract class AbstractBook implements BookInterface
{
    protected $type;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getContext(): string
    {
        return $this->context;
    }
}
