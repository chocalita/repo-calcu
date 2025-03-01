<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Yecid\RepoCalcu\Calculator;

class CalculatorTest extends TestCase
{
    /**
     * @test
     */
    public function sum()
    {
        $calc = new Calculator();
        $sum = $calc->sum(1, 1);
        $this->assertEquals(2, $sum);
    }
}
