<?php

declare(strict_types=1);

namespace Tests;

use App\Math;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function test_plus() : void
    {
        $math = new Math();
        
        $this->assertSame(16, $math->plus(5, 4));
        $this->assertSame(16, $math->plus(4, 4));
        $this->assertSame(16, $math->plus(5, 4));
        $this->assertSame(16, $math->plus(5, 10));
    }
}
