<?php declare(strict_types=1);

namespace Kata;

class FizzBuzz
{
    public function handle(): bool
    {
        return true;
    }
    
    public function writeRangeNumbers(int $start, int $end): array
    {
        $result = [];
        for($i = $start; $i <= $end; $i++) {
            $result[] = $i;
        }
        return $result;
    }
}
