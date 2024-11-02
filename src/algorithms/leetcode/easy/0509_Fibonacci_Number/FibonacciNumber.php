<?php

/**
 * Related questions:
 *    91. Decode Ways
 *    62. Unique Paths
 *    70. Climbing Stairs
 */
class Solution
{
    /**
     * @param Integer $n
     * @return Integer
     */
    public function fibRecursive($n)
    {
        if ($n === 0) {
            return 0;
        }

        if ($n === 1) {
            return 1;
        }

        return $this->fibRecursive($n - 1) + $this->fibRecursive($n - 2);
    }

    /**
     * Dynamic programming apporach
     *
     * Time Complexity - O(N)
     * Space Complexity - O(N)
     * https://leetcode.com/problems/fibonacci-number/discuss/218301/C%2B%2B-3-Solutions-Explained-Recursive-or-Iterative-with-DP-or-Imperative
     *
     * @param Integer $n
     * @return Integer
     */
    public function fibDynamicProgramming($n)
    {
        if ($n === 0) {
            return 0;
        }

        if ($n === 1 || $n === 2) {
            return 1;
        }

        // Initialize Fibonacci number array
        $fibArray = [
            0 => 0,
            1 => 1,
            2 => 2,
        ];

        for ($i = 2; $i <= $n; $i++) {
            $fibArray[$i] = $fibArray[$i - 1] + $fibArray[$i - 2];
        }

        return $fibArray[$n];
    }


    /**
     * Imperative apporach
     *
     * Time Complexity - O(N)
     * Space Complexity - O(1)
     * https://leetcode.com/problems/fibonacci-number/discuss/218301/C%2B%2B-3-Solutions-Explained-Recursive-or-Iterative-with-DP-or-Imperative
     *
     * @param Integer $n
     * @return Integer
     */
    public function fibImperative($n)
    {
        // if ($n === 0) {
        //     return 0;
        // }

        // if ($n === 1 || $n === 2) {
        //     return 1;
        // }

        if ($n < 2) {
            return $n;
        }

        $first = 0;
        $second = 1;
        $third = 1;

        for ($i = 2; $i <= $n; $i++) {
            $third = $first + $second;
            $first = $second;
            $second = $third;

            // echo "$first + $second = $third\n";
        }

        return $third;
    }
}

$prova = new Solution;
var_dump($prova->fibImperative(7));
