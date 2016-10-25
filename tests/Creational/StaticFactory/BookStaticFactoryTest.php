<?php
namespace DesignPatterns\Tests\Creational\StaticFactory;

use DesignPatterns\Creational\StaticFactory\BookStaticFactory;

class BookStaticFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testCanCreateBook()
    {
        $robinHoodBook = BookStaticFactory::build('Robin Hood');
        $donQuixoteBook = BookStaticFactory::build('Don Quixote');

        $this->assertInstanceOf('DesignPatterns\Creational\StaticFactory\Books\RobinHoodBook', $robinHoodBook);
        $this->assertInstanceOf('DesignPatterns\Creational\StaticFactory\Books\DonQuixoteBook', $donQuixoteBook);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testException()
    {
        BookStaticFactory::build('Bla Bla Bla');
    }
}
