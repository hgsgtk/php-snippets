<?php
declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use PhpForEveryone\Calculator;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $this->assertSame(3, $calculator->add(1, 2));
    }
}