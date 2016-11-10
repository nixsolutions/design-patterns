<?php

namespace DesignPatterns\Structural\Facade;

class FacadeTest extends \PHPUnit_Framework_TestCase
{
    const MONEY_IN_CASH_BOX = 1000;

    protected $firstOrder = [
        'burgers' => 'hamburger',
        'waters'  => 'fanta',
        'cash'    => 30,
    ];

    protected $secondOrder = [
        'burgers' => [
            'hamburger',
            'cheeseburger',
        ],
        'waters'  => 'cocaCola',
        'cash'    => 50,
    ];

    /**
     * @var CashBox
     */
    protected $cashBox;

    /**
     * @var CashMan
     */
    protected $cashMan;

    /**
     * @var BurgerWorker
     */
    protected $burgerWorker;

    /**
     * @var WaterWorker
     */
    protected $waterWorker;

    public function setUp()
    {
        $this->cashBox = new CashBox(self::MONEY_IN_CASH_BOX);
        $this->burgerWorker = new BurgerWorker();
        $this->waterWorker = new WaterWorker();

        $this->cashMan = new CashMan(
            $this->burgerWorker,
            $this->waterWorker,
            $this->cashBox
        );
    }

    public function testMakeFirstOrder()
    {
        $this->assertEquals($this->cashBox->getCash(), self::MONEY_IN_CASH_BOX);

        $firstOrder = $this->cashMan->makeOrder($this->firstOrder, $this->firstOrder['cash']);

        $this->assertInternalType('array', $firstOrder);
        $this->assertArrayHasKey('price', $firstOrder);
        $this->assertArrayHasKey('change', $firstOrder);

        $this->assertEquals($firstOrder['change'], $this->firstOrder['cash'] - $firstOrder['price']);

        $this->assertEquals($this->cashBox->getCash(), self::MONEY_IN_CASH_BOX + $firstOrder['price']);

        return $firstOrder;
    }

    public function testMakeSecondOrder()
    {
        $secondOrder = $this->cashMan->makeOrder($this->secondOrder, $this->secondOrder['cash']);

        $this->assertInternalType('array', $secondOrder);
        $this->assertArrayHasKey('price', $secondOrder);
        $this->assertArrayHasKey('change', $secondOrder);

        $this->assertEquals($secondOrder['change'], $this->secondOrder['cash'] - $secondOrder['price']);

        $this->assertEquals(
            $this->cashBox->getCash(),
            self::MONEY_IN_CASH_BOX + $secondOrder['price']
        );
    }
}
