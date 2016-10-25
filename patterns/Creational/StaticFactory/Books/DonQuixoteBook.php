<?php
namespace DesignPatterns\Creational\StaticFactory\Books;

class DonQuixoteBook extends AbstractBook
{
    protected $title = 'Don Quixote';
    protected $author = 'Miguel de Cervantes';
    protected $pagesCount = 863;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @return int
     */
    public function getPagesCount(): int
    {
        return $this->pagesCount;
    }

}
