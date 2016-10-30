<?php
class CalculatorTest extends PHPUnit\Framework\TestCase
{
    public function testTwoNumbersCanBeAdded()
    {
        $calculator = new Calculator;
        $result = $calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }
}