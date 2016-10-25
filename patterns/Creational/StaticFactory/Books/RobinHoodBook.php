<?php
namespace DesignPatterns\Creational\StaticFactory\Books;

class RobinHoodBook extends AbstractBook
{
    protected $author = 'Henry Gilbert';
    protected $title = 'Robin Hood';
    protected $pagesCount = 547;

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return int
     */
    public function getPagesCount(): int
    {
        return $this->pagesCount;
    }
}
