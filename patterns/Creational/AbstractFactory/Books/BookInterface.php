<?php
namespace DesignPatterns\Creational\AbstractFactory\Books;

interface BookInterface
{
    public function getType(): string;

    public function getContext(): string;
}
