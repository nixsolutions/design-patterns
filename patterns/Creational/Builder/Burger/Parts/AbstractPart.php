<?php

namespace DesignPatterns\Creational\Builder\Burger\Parts;

/**
 * Class AbstractPart
 * @package DesignPatterns\Creational\Builder\Burger\Parts
 */
abstract class AbstractPart
{
    /**
     * @var string
     */
    protected $title;

    /**
     * AbstractPart constructor.
     *
     * @param string $title
     */
    public function __construct(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
}
