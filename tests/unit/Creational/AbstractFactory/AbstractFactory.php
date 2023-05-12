<?php
namespace DesignPatterns\Tests\Creational\AbstractFactory;

use DesignPatterns\Creational\AbstractFactory\Chef;
use DesignPatterns\Creational\AbstractFactory\Recipes\EuropeComboRecipe;
use DesignPatterns\Creational\AbstractFactory\Recipes\UsaComboRecipe;
use PHPUnit_Framework_TestCase;

class AbstractBookFactoryTest extends PHPUnit_Framework_TestCase
{
    public function testUsaComboRecipeInstanceOfAbstractFactory()
    {
        $usaComboRecipe = new UsaComboRecipe();

        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Recipes\UsaComboRecipe', $usaComboRecipe);
    }

    public function testEuropeComboRecipeInstanceOfAbstractFactory()
    {
        $europeComboRecipe = new EuropeComboRecipe();

        $this->assertInstanceOf(
            'DesignPatterns\Creational\AbstractFactory\Recipes\EuropeComboRecipe',
            $europeComboRecipe
        );
    }

    public function testBurgerOnUSADay()
    {
        $usaComboRecipe = new UsaComboRecipe();
        $chef = new Chef($usaComboRecipe);

        $usaBurger = $chef->getBurger();

        $this->assertInstanceOf(
            'DesignPatterns\Creational\AbstractFactory\Burgers\AbstractBurger',
            $usaBurger
        );
        $this->assertInstanceOf(
            'DesignPatterns\Creational\AbstractFactory\Burgers\Hamburger',
            $usaBurger
        );
    }

    public function testPotatoOnUSADay()
    {
        $usaComboRecipe = new UsaComboRecipe();
        $chef = new Chef($usaComboRecipe);

        $usaPotato = $chef->getPotato();

        $this->assertInstanceOf(
            'DesignPatterns\Creational\AbstractFactory\Potatoes\AbstractPotato',
            $usaPotato
        );
        $this->assertInstanceOf(
            'DesignPatterns\Creational\AbstractFactory\Potatoes\FriesPotato',
            $usaPotato
        );
    }

    public function testWaterOnUSADay()
    {
        $usaComboRecipe = new UsaComboRecipe();
        $chef = new Chef($usaComboRecipe);

        $usaWater = $chef->getWater();

        $this->assertInstanceOf(
            'DesignPatterns\Creational\AbstractFactory\Waters\AbstractWater',
            $usaWater
        );
        $this->assertInstanceOf(
            'DesignPatterns\Creational\AbstractFactory\Waters\CocaColaWater',
            $usaWater
        );
    }

    public function testComboOnUSADay()
    {
        $usaComboRecipe = new UsaComboRecipe();
        $chef = new Chef($usaComboRecipe);

        $usaCombo = $chef->getCombo();

        $this->assertCount(
            4,
            $usaCombo
        );

        $this->assertInstanceOf(
            'DesignPatterns\Creational\AbstractFactory\Potatoes\AbstractPotato',
            $usaCombo['Burger']
        );
        $this->assertInstanceOf(
            'DesignPatterns\Creational\AbstractFactory\Potatoes\FriesPotato',
            $usaCombo['Burger']
        );

        $this->assertInstanceOf(
            'DesignPatterns\Creational\AbstractFactory\Potatoes\AbstractPotato',
            $usaCombo['Potato']
        );
        $this->assertInstanceOf(
            'DesignPatterns\Creational\AbstractFactory\Potatoes\FriesPotato',
            $usaCombo['Potato']
        );

        $this->assertInstanceOf(
            'DesignPatterns\Creational\AbstractFactory\Waters\AbstractWater',
            $usaCombo['Water']
        );
        $this->assertInstanceOf(
            'DesignPatterns\Creational\AbstractFactory\Waters\CocaColaWater',
            $usaCombo['Water']
        );
    }

    public function testBurgerOnEuropeDay()
    {
        $europeComboRecipe = new EuropeComboRecipe();
        $chef = new Chef($europeComboRecipe);

        $europeBurger = $chef->getBurger();

        $this->assertInstanceOf(
            'DesignPatterns\Creational\AbstractFactory\Burgers\AbstractBurger',
            $europeBurger
        );
        $this->assertInstanceOf(
            'DesignPatterns\Creational\AbstractFactory\Burgers\Hamburger',
            $europeBurger
        );
    }

    public function testPotatoOnEuropeDay()
    {
        $europeComboRecipe = new EuropeComboRecipe();
        $chef = new Chef($europeComboRecipe);

        $europePotato = $chef->getPotato();

        $this->assertInstanceOf(
            'DesignPatterns\Creational\AbstractFactory\Potatoes\AbstractPotato',
            $europePotato
        );
        $this->assertInstanceOf(
            'DesignPatterns\Creational\AbstractFactory\Potatoes\FriesPotato',
            $europePotato
        );
    }

    public function testWaterOnEuropeDay()
    {
        $europeComboRecipe = new EuropeComboRecipe();
        $chef = new Chef($europeComboRecipe);

        $europeWater = $chef->getWater();

        $this->assertInstanceOf(
            'DesignPatterns\Creational\AbstractFactory\Waters\AbstractWater',
            $europeWater
        );
        $this->assertInstanceOf(
            'DesignPatterns\Creational\AbstractFactory\Waters\CocaColaWater',
            $europeWater
        );
    }

    public function testComboOnEuropeDay()
    {
        $europeComboRecipe = new EuropeComboRecipe();
        $chef = new Chef($europeComboRecipe);

        $europeCombo = $chef->getCombo();

        $this->assertCount(
            4,
            $europeCombo
        );

        $this->assertInstanceOf(
            'DesignPatterns\Creational\AbstractFactory\Potatoes\AbstractPotato',
            $europeCombo['Burger']
        );
        $this->assertInstanceOf(
            'DesignPatterns\Creational\AbstractFactory\Potatoes\FriesPotato',
            $europeCombo['Burger']
        );

        $this->assertInstanceOf(
            'DesignPatterns\Creational\AbstractFactory\Potatoes\AbstractPotato',
            $europeCombo['Potato']
        );
        $this->assertInstanceOf(
            'DesignPatterns\Creational\AbstractFactory\Potatoes\FriesPotato',
            $europeCombo['Potato']
        );

        $this->assertInstanceOf(
            'DesignPatterns\Creational\AbstractFactory\Waters\AbstractWater',
            $europeCombo['Water']
        );
        $this->assertInstanceOf(
            'DesignPatterns\Creational\AbstractFactory\Waters\CocaColaWater',
            $europeCombo['Water']
        );
    }
}
