<?php

class Solution
{
    /**
     * @param Integer[][] $matrix
     * @return Integer[]
     */
    function findDiagonalOrder($matrix)
    {
        // assume $matrix is a M x N array
        $m = sizeof($matrix);
        $n = sizeof($matrix[0]);

        $result = [];

        for ($diagonal=0; $diagonal <= ($m + $n - 2); $diagonal++) {
            // x + y = diagonal
            for ($i = 0; $i <= $diagonal; $i++) {
                $x = $i;
                $y = $diagonal - $x;

                // reverse the direction when it's even
                if ($diagonal % 2 == 0) {
                    $tmp = $x;
                    $x = $y;
                    $y = $tmp;
                }

                if ($x >= $m || $y >= $n) {
                    continue;
                }

                // https://www.php.net/manual/en/function.array-push.php#83388
                // array_push is slower than array_push
                // array_push($result, $matrix[$x][$y]);
                $result[] = $matrix[$x][$y];
            }
        }

        return $result;
    }
}
