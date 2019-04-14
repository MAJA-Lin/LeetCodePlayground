<?php

class Solution
{
    /**
     * @param Integer[][] $matrix
     * @return Integer[]
     */
    public function spiralOrder($matrix)
    {
        $result = [];
        if (sizeof($matrix) == 0) {
            return $result;
        }

        // Length of rows and cols
        $m = sizeof($matrix) - 1;
        $n = sizeof($matrix[0]) - 1;

        // minimun of rows and cols
        $minM = 0;
        $minN = 0;

        while ($minM <= $m && $minN <= $n) {
            // Traverse row: (0, 0) -> (0, 4)
            for ($i = $minN; $i <= $n; $i++) {
                $result[] = $matrix[$minM][$i];
            }
            $minM++;

            for ($i = $minM; $i <= $m; $i++) {
                $result[] = $matrix[$i][$n];
            }
            $n--;

            if ($minM <= $m) {
                for ($i = $n; $i >= $minN; $i--) {
                    $result[] = $matrix[$m][$i];
                }
                $m--;
            }

            if ($minN <= $n) {
                for ($i = $m; $i >= $minM; $i--) {
                    $result[] = $matrix[$i][$minN];
                }
                $minN++;
            }
        }

        return $result;
    }
}

$prova = new Solution;

$testcase = [
    [ 1, 2, 3 ,4, 5],
    [ 6, 7, 8, 9,10],
    [11,12,13,14,15],
    [16,17,18,19,20],
    [21,22,23,24,25]
];

var_dump($prova->spiralOrder($testcase));

// (0,0) (0,1) (0,2) (0,3) (0,4)
// (1,0) (1,1) (1,2) (1,3) (1,4)
// (2,0) (2,1) (2,2) (2,3) (2,4)
// (3,0) (3,1) (3,2) (3,3) (3,4)
// (4,0) (4,1) (4,2) (4,3) (4,4)
