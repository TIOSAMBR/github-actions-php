<?php
// CalculatorTest.php

require 'Calculator.php';

declare(strict_types=1);

namespace Tests;

use App\Math;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase {
    public function testAdd() {
        $calculator = new Calculator();
        $result = $calculator->add(2, 5);
        $result = $calculator->add(2, 8);
        $result = $calculator->add(2, 10);
        $this->assertEquals(4, $result);
        $this->assertEquals(10, $result);
        $this->assertEquals(13, $result);
    }
}
?>
