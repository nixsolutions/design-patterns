<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

use PHPUnit_Framework_TestCase;

class ChainOfResponsibilityTest extends PHPUnit_Framework_TestCase
{
    public function testWithOutParent()
    {
        $contract = new Contract(78);

        $mainDepartment = new Department('MAIN', 30);
        $contractWithSign = $mainDepartment->getSign($contract);

        $this->assertGreaterThan($mainDepartment->getImportance(), $contract->getImportance());
        $this->assertEquals('MAIN', $contractWithSign->getSign());
    }

    public function testWithParent()
    {
        $contract = new Contract(18);

        $mainDepartment = new Department('MAIN', 30);
        $subDepartment = new Department('SUB', 20, $mainDepartment);
        $contractWithSign = $subDepartment->getSign($contract);

        $this->assertGreaterThan($contract->getImportance(), $subDepartment->getImportance());
        $this->assertEquals('SUB', $contractWithSign->getSign());

        $newContract = new Contract(25);
        $contractWithSign = $subDepartment->getSign($newContract);

        $this->assertGreaterThan($subDepartment->getImportance(), $newContract->getImportance());
        $this->assertEquals('MAIN', $contractWithSign->getSign());
    }
}
