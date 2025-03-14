<?php

declare(strict_types=1);

namespace Roslov\Fibonacci;

/**
 * Calculates the Fibonacci number.
 */
final class Fibonacci
{
    /**
     * Calculates the Fibonacci number.
     *
     * @param int $n Number
     * @return int Fibonacci number
     *
     * @see https://en.wikipedia.org/wiki/Fibonacci_number#Computation_by_rounding
     */
    public static function calculate(int $n): int
    {
        return (int) round((((sqrt(5) + 1) / 2) ** $n) / sqrt(5));
    }
}
