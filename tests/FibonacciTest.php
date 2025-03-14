<?php

declare(strict_types=1);

namespace Roslov\Fibonacci\Tests;

use PHPUnit\Framework\TestCase;
use Roslov\Fibonacci\Fibonacci;

/**
 * Tests the Fibonacci number calculation.
 */
final class FibonacciTest extends TestCase
{
    /**
     * Tests the Fibonacci number calculation.
     *
     * @param int $n Number
     * @param int $expected Expected Fibonacci number
     *
     * @dataProvider dataProvider
     */
    public function testCalculate(int $n, int $expected): void
    {
        $this->assertEquals($expected, Fibonacci::calculate($n));
    }

    /**
     * Provides data for tests.
     *
     * @return int[][] Data
     */
    public static function dataProvider(): array
    {
        // phpcs:disable SlevomatCodingStandard.Whitespaces.DuplicateSpaces.DuplicateSpaces
        return [
            [ 0,    0],
            [ 1,    1],
            [ 2,    1],
            [ 3,    2],
            [ 4,    3],
            [ 5,    5],
            [ 6,    8],
            [ 7,   13],
            [ 8,   21],
            [ 9,   34],
            [10,   55],
            [11,   89],
            [12,  144],
            [13,  233],
            [14,  377],
            [15,  610],
            [16,  987],
            [17, 1597],
            [18, 2584],
            [19, 4181],
            [20, 6765],
        ];
        // phpcs:enable SlevomatCodingStandard.Whitespaces.DuplicateSpaces.DuplicateSpaces
    }
}
