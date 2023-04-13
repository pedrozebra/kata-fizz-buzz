<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    private $fizzBuzz;

    protected function setUp(): void
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    public function testShallPass(): void
    {
        $this->assertEquals(1, 1);
    }

    public function testHandleReturnTrue(): void
    {
        $this->assertEquals(true, $this->fizzBuzz->handle());
    }

    public function testProgramWriteRangeNumbers() {
        $result = $this->fizzBuzz->writeRangeNumbers(1,100);
        $this->assertIsArray($result);
        $this->assertCount(100, $result);
        $this->assertEquals(1, $result[0]);
        $this->assertEquals(100, $result[99]);
    }
}
