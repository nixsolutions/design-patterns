<?php
namespace DesignPatterns\Creational\StaticFactory;

use DesignPatterns\Creational\StaticFactory\Books\AbstractBook;
use DesignPatterns\Creational\StaticFactory\Books\DonQuixoteBook;
use DesignPatterns\Creational\StaticFactory\Books\RobinHoodBook;

class BookStaticFactory implements StaticFactoryInterface
{
    public static function build(string $bookName): AbstractBook
    {
        if ('Don Quixote' == $bookName) {
            return new DonQuixoteBook();
        }

        if ('Robin Hood' == $bookName) {
            return new RobinHoodBook();
        }

        throw new \InvalidArgumentException('Book not exist.');
    }
}
