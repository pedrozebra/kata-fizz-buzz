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

    public function testProgramWriteRangeNumbers(): void 
    {
        $result = $this->fizzBuzz->writeRangeNumbers(1,100);
        $this->assertIsArray($result);
        $this->assertCount(100, $result);
        $this->assertEquals(1, $result[0]);
        $this->assertEquals(100, $result[99]);
    }

    public function testNumberIsMultipleOfThree(): void
    {
        $this->assertEquals(false, $this->fizzBuzz->isMultipleOfThree(4));
        $this->assertEquals(false, $this->fizzBuzz->isMultipleOfThree(1));
        $this->assertEquals(true, $this->fizzBuzz->isMultipleOfThree(6));
        $this->assertEquals(true, $this->fizzBuzz->isMultipleOfThree(99));
        $this->assertEquals(false, $this->fizzBuzz->isMultipleOfThree(13));
    }

    public function testNumberIsMultipleOfFive(): void
    {
        $this->assertEquals(false, $this->fizzBuzz->isMultipleOfFive(4));
        $this->assertEquals(false, $this->fizzBuzz->isMultipleOfFive(14));
        $this->assertEquals(false, $this->fizzBuzz->isMultipleOfFive(91));
        $this->assertEquals(true, $this->fizzBuzz->isMultipleOfFive(10));
        $this->assertEquals(true, $this->fizzBuzz->isMultipleOfFive(90));
        $this->assertEquals(true, $this->fizzBuzz->isMultipleOfFive(95));
    }
}
