<?php

declare(strict_types=1);

namespace App;

class BinaryMatrix
{
    /**
     * @param array<int[]> $matrixData
     */
    public function __construct(
        private readonly array $matrixData
    )
    {
    }

    public function getMaxSubMatrixSize(): int
    {
        if (empty($this->matrixData)) {
            return 0;
        }

        $matrixAnalysis = [];
        foreach ($this->matrixData as $rowNumber => $rowOfBinaries) {
            foreach ($rowOfBinaries as $colNumber => $value) {
                if ($rowNumber === 0 || $colNumber === 0 || $value === 0) {
                    $matrixAnalysis[$rowNumber][$colNumber] = $value;
                    continue;
                }

                $surroundings = [
                    $matrixAnalysis[$rowNumber][$colNumber - 1],
                    $matrixAnalysis[$rowNumber - 1][$colNumber - 1],
                    $matrixAnalysis[$rowNumber - 1][$colNumber],
                ];

                $matrixAnalysis[$rowNumber][$colNumber] = min($surroundings) + 1;
            }
        }

        $maxByRows = array_map(fn(array $integers) => max($integers), $matrixAnalysis);

        return max($maxByRows);
    }
}
