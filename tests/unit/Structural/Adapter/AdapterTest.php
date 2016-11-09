<?php
namespace DesignPatterns\Tests\Structural\Adapter;

use DesignPatterns\Structural\Adapter\CashBox;
use DesignPatterns\Structural\Adapter\Dollar\DollarsCash;
use DesignPatterns\Structural\Adapter\Euro\EuroCash;
use DesignPatterns\Structural\Adapter\EuroAdapter;
use TypeError;

class AdapterTest extends \PHPUnit_Framework_TestCase
{
    public function testGetSumWithDollarCash()
    {
        $cashBox = new CashBox();
        $dollarCash = new DollarsCash(15);

        $cashBox->setCash($dollarCash);
        $this->assertEquals($cashBox->getSumCashInCashBox(), $dollarCash->getCash());
    }

    /**
     * @expectedException TypeError
     */
    public function testTypeErrorGetSumWithEuroCash()
    {
        $cashBox = new CashBox();
        $euroCash = new EuroCash(15);

        $cashBox->setCash($euroCash);
    }

    public function testAdapterForEuroCash()
    {
        $cashBox = new CashBox();
        $euroCash = new EuroCash(10);
        $dollarCash = new DollarsCash(15);
        $euroCashAdapter = new EuroAdapter($euroCash);

        $cashBox->setCash($euroCashAdapter);
        $cashBox->setCash($dollarCash);
        $this->assertEquals($cashBox->getSumCashInCashBox(), $euroCashAdapter->getCash() + $dollarCash->getCash());
    }
}
