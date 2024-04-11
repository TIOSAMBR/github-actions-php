<?php
// CalculatorTest.php

require 'Calculator.php';

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase {
    public function testAdd() {
        $calculator = new Calculator();
        $result = $calculator->add(2, 3);
        $result = $calculator->add(2, 8);
        $this->assertEquals(5, $result);
        $this->assertEquals(10, $result);
    }
}
?>
