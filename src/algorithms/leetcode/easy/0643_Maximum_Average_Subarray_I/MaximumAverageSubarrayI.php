<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Float
     */
    public function findMaxAverageBrute($nums, $k)
    {
        $maxSum = PHP_INT_MIN;

        for ($i = 0; $i < count($nums); $i++) {
            $currentSum = null;
            $count = 0;

            for ($j = $i; $j < count($nums); $j++) {
                $currentSum = $currentSum + $nums[$j];
                $count++;

                // Question has specified the number of subarray
                if ($count == $k && $maxSum < $currentSum) {
                    $maxSum = $currentSum;
                }
            }
        }

        return $maxSum / $k;
    }

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Float
     */
    public function findMaxAverageOptimize($nums, $k)
    {
        $maxSum = PHP_INT_MIN;
        $currentSum = 0;

        for ($i = 0; $i < $k; $i++) {
            $currentSum = $currentSum + $nums[$i];
            $maxSum = $currentSum;
        }

        for ($i = $k; $i < count($nums); $i++) {
            $currentSum = $currentSum + $nums[$i] - $nums[$i - $k];

            if ($maxSum < $currentSum) {
                $maxSum = $currentSum;
            }
        }

        return $maxSum / $k;
    }
}

$arr = [-1, 4, 9, 1, 5, -2, 3, 6, -5];
$k = 4;
$prova = new Solution;
var_dump($prova->findMaxAverageOptimize($arr, $k));
