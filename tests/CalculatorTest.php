<?php
class CalculatorTest extends PHPUnit\Framework\TestCase
{
    /**
    * @testdox 測試一加二
    */
    public function testTwoNumbersCanBeAdded()
    {
        $calculator = new Calculator;
        $result = $calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }
}