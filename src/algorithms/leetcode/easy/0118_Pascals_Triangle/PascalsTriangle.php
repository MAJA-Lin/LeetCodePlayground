<?php

class Solution
{
    /**
     * @param Integer $numRows
     * @return Integer[][]
     */
    public function generate($numRows)
    {
        $result = [];

        for ($i = 0; $i < $numRows; $i++) {
            for ($j = 0; $j <= $i; $j++) {
                $result[$i][$j] = 1;

                if (isset($result[$i - 1][$j - 1]) && isset($result[$i - 1][$j])) {
                    $result[$i][$j] = $result[$i - 1][$j - 1] + $result[$i - 1][$j];
                }
            }
        }

        return $result;
    }
}

$prova = new Solution;
var_dump($prova->generate(4));

// result[2][1] = result[1][0] + result[1][1]
// result[3][1] = result[2][0] + result[2][1]
// result[3][2] = result[2][1] + result[2][2]
// result[i][j] = result[i-1][j-1] + result[i-1][j]
