<?php
namespace DesignPatterns\Creational\StaticFactory\Books;

abstract class AbstractBook
{
    protected $author;
    protected $title;
    protected $pagesCount;


    abstract public function getAuthor(): string;

    abstract public function getTitle(): string;

    abstract public function getPagesCount(): int;
}
