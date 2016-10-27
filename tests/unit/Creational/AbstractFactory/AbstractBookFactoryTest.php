<?php
namespace DesignPatterns\Tests\Creational\AbstractFactory;

use DesignPatterns\Creational\AbstractFactory\Factories\OreilBookFactory;
use DesignPatterns\Creational\AbstractFactory\Factories\PiterBookFactory;
use PHPUnit_Framework_TestCase;

class AbstractBookFactoryTest extends PHPUnit_Framework_TestCase
{
    /** @var OreilBookFactory $oreilBookFactory */
    private $oreilBookFactory;
    /** @var PiterBookFactory $piterBookFactory */
    private $piterBookFactory;

    protected function setUp()
    {
        $this->oreilBookFactory = new OreilBookFactory();
        $this->piterBookFactory = new PiterBookFactory();
    }

    public function testCanCreatePhpBook()
    {
        $oreilPhpBook = $this->oreilBookFactory->createPHPBook();
        $piterPhpBook = $this->piterBookFactory->createPHPBook();

        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Books\Php\OreilBook', $oreilPhpBook);
        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Books\Php\PiterBook', $piterPhpBook);

        $this->assertEquals($oreilPhpBook->getType(), 'PHP');
        $this->assertEquals($oreilPhpBook->getContext(), 'O`reil');

        $this->assertEquals($piterPhpBook->getType(), 'PHP');
        $this->assertEquals($piterPhpBook->getContext(), 'Piter');
    }

    public function testCanCreateJsBook()
    {
        $oreilJsBook = $this->oreilBookFactory->createJSBook();
        $piterJsBook = $this->piterBookFactory->createJSBook();

        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Books\Js\OreilBook', $oreilJsBook);
        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Books\Js\PiterBook', $piterJsBook);

        $this->assertEquals($oreilJsBook->getType(), 'JS');
        $this->assertEquals($oreilJsBook->getContext(), 'O`reil');

        $this->assertEquals($piterJsBook->getType(), 'JS');
        $this->assertEquals($piterJsBook->getContext(), 'Piter');
    }

    public function testCanCreateMySqlBook()
    {
        $oreilMySQLBook = $this->oreilBookFactory->createMySQLBook();
        $piterMySQLBook = $this->piterBookFactory->createMySQLBook();

        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Books\Mysql\OreilBook', $oreilMySQLBook);
        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Books\Mysql\PiterBook', $piterMySQLBook);

        $this->assertEquals($oreilMySQLBook->getType(), 'MySQL');
        $this->assertEquals($oreilMySQLBook->getContext(), 'O`reil');

        $this->assertEquals($piterMySQLBook->getType(), 'MySQL');
        $this->assertEquals($piterMySQLBook->getContext(), 'Piter');
    }
}
