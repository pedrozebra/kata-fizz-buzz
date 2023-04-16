<?php

namespace Kata;

class FizzBuzz
{
    private $listRangeNumbers = [];

    public function __construct()
    {
        $this->listRangeNumbers = $this->writeRangeNumbers(1, 100);
    }
    public function handle(): bool
    {
        return true;
    }

    public function writeRangeNumbers(int $start, int $end): array
    {
        $result = [];
        for ($i = $start; $i <= $end; $i++) {
            $result[] = $i;
        }
        return $result;
    }

    public function isMultipleOfThree(int $num): bool
    {
        return $num % 3 === 0;
    }

    public function isMultipleOfFive(int $num): bool
    {
        return $num % 5 === 0;
    }

    public function isMultipleOfThreeAndFive(int $num): bool
    {
        return $this->isMultipleOfThree($num) && $this->isMultipleOfFive($num);
    }

    public function generateFizzBuzz(): array
    {
        $result = [];

        $result = array_map(function ($item) {
            if ($this->isMultipleOfThreeAndFive($item)) return 'FizzBuzz';
            if ($this->isMultipleOfThree($item)) return 'Fizz';
            if ($this->isMultipleOfFive($item)) return 'Buzz';

            return $item;
        }, $this->listRangeNumbers);

        return $result;
    }
}
