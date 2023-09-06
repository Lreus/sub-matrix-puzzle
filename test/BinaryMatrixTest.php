<?php

declare(strict_types=1);

namespace Test;

use App\BinaryMatrix;
use Generator;
use PHPUnit\Framework\TestCase;

class BinaryMatrixTest extends TestCase
{
    public function matrixAndResultExpectations(): Generator
    {
        yield [
            [], 0
        ];

        yield [
            [
                [1, 1],
                [1, 1],
            ], 2
        ];

        yield [
            [
                [0, 1],
                [1, 1],
            ], 1
        ];

        yield [
            [
                [0, 1, 1, 1, 0],
                [0, 0, 1, 1, 1],
                [1, 1, 1, 1, 0],
                [0, 1, 1, 1, 1],
                [1, 1, 1, 1, 1],
            ], 3
        ];
    }

    /**
     * @dataProvider matrixAndResultExpectations
     *
     * @param array<int[]> $binaryMatrix
     */
    public function testItReturnsLargestSquareSize(array $binaryMatrix, int $largestSubMatrixSize): void
    {
        $matrix = new BinaryMatrix($binaryMatrix);
        self::assertEquals($largestSubMatrixSize, $matrix->getMaxSubMatrixSize());
    }
}

