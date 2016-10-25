<?php
namespace DesignPatterns\Creational\Prototype;

class ClassicBook extends AbstractBookPrototype
{
    /**
     * @var string
     */
    protected $category = 'Classic';

    public function __clone()
    {
    }
}
