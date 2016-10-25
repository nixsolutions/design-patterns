<?php
namespace DesignPatterns\Creational\Prototype;

class ModernBook extends AbstractBookPrototype
{
    /**
     * @var string
     */
    protected $category = 'Modern';

    public function __clone()
    {
    }
}
