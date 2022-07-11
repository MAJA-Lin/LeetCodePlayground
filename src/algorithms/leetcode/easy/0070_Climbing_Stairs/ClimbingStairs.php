<?php

/**
 * It's related to 0509 - Fibonacci Number
 */
class Solution
{
    /**
     * @param Integer $n
     * @return Integer
     */
    public function climbStairs($n)
    {
        if ($n < 2) {
            return $n;
        }

        $first = 0;
        $second = 1;
        $third = 1;

        for ($i = 1; $i <= $n; $i++) {
            $third = $first + $second;
            $first = $second;
            $second = $third;
        }

        return $third;
    }
}

$prova = new Solution;
var_dump($prova->climbStairs(5));
