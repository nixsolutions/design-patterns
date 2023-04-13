<?php
namespace DesignPatterns\Tests\Structural\Bridge;

use DesignPatterns\Structural\Bridge\Abstraction\EuropeCashBox;
use DesignPatterns\Structural\Bridge\Abstraction\UsaCashBox;
use DesignPatterns\Structural\Bridge\Implementation\CurrencyInterface;
use DesignPatterns\Structural\Bridge\Implementation\DollarCurrency;
use DesignPatterns\Structural\Bridge\Implementation\EuroCurrency;
use PHPUnit_Framework_TestCase;

class BridgeTest extends PHPUnit_Framework_TestCase
{
    public function testDollarCurrencyInstanceOfCurrencyInterface()
    {
        $dollar = new DollarCurrency();
        $this->assertInstanceOf('DesignPatterns\Structural\Bridge\Implementation\CurrencyInterface', $dollar);

        return $dollar;
    }

    /**
     * @depends testDollarCurrencyInstanceOfCurrencyInterface
     *
     * @param CurrencyInterface $dollar
     */
    public function testDollarGetSymbol(CurrencyInterface $dollar)
    {
        $this->assertEquals('$', $dollar->getCurrencySymbol());
    }

    /**
     * @depends testDollarCurrencyInstanceOfCurrencyInterface
     *
     * @param CurrencyInterface $dollar
     */
    public function testDollarGetRate(CurrencyInterface $dollar)
    {
        $this->assertEquals(DollarCurrency::CURRENCY_RATE, $dollar->getCurrencyRate());
    }

    public function testDollarGetSum()
    {
        $val = 234.24;
        $dollar = new DollarCurrency($val);

        $this->assertEquals($val, $dollar->getSum());
    }

    public function testEuroCurrencyInstanceOfCurrencyInterface()
    {
        $euro = new EuroCurrency();
        $this->assertInstanceOf('DesignPatterns\Structural\Bridge\Implementation\CurrencyInterface', $euro);

        return $euro;
    }

    /**
     * @depends testEuroCurrencyInstanceOfCurrencyInterface
     *
     * @param CurrencyInterface $euro
     */
    public function testEuroGetSymbol(CurrencyInterface $euro)
    {
        $this->assertEquals('€', $euro->getCurrencySymbol());
    }

    /**
     * @depends testEuroCurrencyInstanceOfCurrencyInterface
     *
     * @param CurrencyInterface $euro
     */
    public function testEuroGetRate(CurrencyInterface $euro)
    {
        $this->assertEquals(EuroCurrency::CURRENCY_RATE, $euro->getCurrencyRate());
    }

    public function testEuroGetSum()
    {
        $val = 2555.24;
        $dollar = new EuroCurrency($val);

        $this->assertEquals($val, $dollar->getSum());
    }

    public function testUsaCashBoxInstanceOfAbstractCashBox()
    {
        $dollar = new DollarCurrency();
        $usaCashBox = new UsaCashBox($dollar);

        $this->assertInstanceOf('DesignPatterns\Structural\Bridge\Abstraction\AbstractCashBox', $usaCashBox);
    }

    public function testEuroCashBoxInstanceOfAbstractCashBox()
    {
        $euro = new EuroCurrency();
        $euroCashBox = new EuropeCashBox($euro);

        $this->assertInstanceOf('DesignPatterns\Structural\Bridge\Abstraction\AbstractCashBox', $euroCashBox);
    }

    public function testUsaCashBoxGetCashInCashBox()
    {
        $dollar = new DollarCurrency();

        $fiveDollars = new DollarCurrency(5);
        $sixDollars = new DollarCurrency(6);
        $tenEuros = new EuroCurrency(10);

        $usaCashBox = new UsaCashBox($dollar);

        $usaCashBox->setCash($fiveDollars);
        $this->assertEquals($fiveDollars->getSum(), $usaCashBox->getCashInCashBox());

        $usaCashBox->setCash($sixDollars);
        $this->assertEquals(
            $fiveDollars->getSum() + $sixDollars->getSum(),
            $usaCashBox->getCashInCashBox()
        );

        $usaCashBox->setCash($tenEuros);
        $defaultCurrencyRate = $usaCashBox->getDefaultCurrency()->getCurrencyRate();

        $this->assertEquals(
            $fiveDollars->getSum()
            + $sixDollars->getSum()
            + (($tenEuros->getSum() * $defaultCurrencyRate) / $tenEuros->getCurrencyRate()),
            $usaCashBox->getCashInCashBox()
        );
    }
}
