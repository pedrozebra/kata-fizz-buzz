<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\FizzBuzz;

class FuzzBuzzTest extends TestCase
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
}
