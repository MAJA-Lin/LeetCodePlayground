<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function maxSubArrayBrute($nums)
    {
        $maxSum = PHP_INT_MIN;

        for ($i = 0; $i < count($nums); $i++) {
            $currentSum = null;
            $count = 0;

            for ($j = $i; $j < count($nums); $j++) {
                $currentSum = $currentSum + $nums[$j];
                $count++;

                if ($maxSum < $currentSum) {
                    $maxSum = $currentSum;
                }
            }
        }

        return $maxSum;
    }

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function maxSubArrayDevideAndConquer($nums)
    {
        return $this->getSubArraySum($nums, 0, count($nums) - 1);
    }

    public function getSubArraySum($nums, int $left, int $right)
    {
        echo "-----------------\n";
        echo "LEFT_INDEX IS $left\n";
        echo "RIGHT_INDEX IS $right\n";

        if ($left == $right) {
            return $nums[$left];
        }

        // avoid overflow integer
        $mid = (int) ($left + ($right - $left) / 2);

        $leftSum = $this->getSubArraySum($nums, $left, $mid);
        echo "LEFT_SUM IS $leftSum\n";
        $rightSum = $this->getSubArraySum($nums, $mid + 1, $right);
        echo "RIGHT_SUM IS $rightSum\n";
        $crossSum = $this->getCrossArraySum($nums, $left, $right);
        echo "CROSS_SUM IS $crossSum\n";

        if ($leftSum >= $rightSum && $leftSum >= $crossSum) {
            echo "Returning LEFT: $leftSum \n";
            return $leftSum;
        }

        if ($rightSum >= $leftSum && $rightSum >= $crossSum) {
            echo "Returning RIGHT: $rightSum \n";
            return $rightSum;
        }

        echo "Returning CROSS: $crossSum \n";
        return $crossSum;
    }

    public function getCrossArraySum($nums, int $left, int $right)
    {
        $leftSum = PHP_INT_MIN;
        $rightSum = PHP_INT_MIN;

        // Mid
        $mid = (int) ($left + ($right - $left) / 2);

        $sum = 0;
        for ($i = $mid; $i >= $left; $i--) {
            $sum = $sum + $nums[$i];

            if ($sum > $leftSum) {
                $leftSum = $sum;
            }
        }

        $sum = 0;
        for ($i = $mid + 1; $i <= $right; $i++) {
            $sum = $sum + $nums[$i];

            if ($sum > $rightSum) {
                $rightSum = $sum;
            }
        }

        return $leftSum + $rightSum;
    }

    /**
     * Implementation of dynamic programming
     * Source: https://www.geeksforgeeks.org/largest-sum-contiguous-subarray/
     * @param Integer[] $nums
     * @return Integer
     */
    public function maxSubArrayDynamicProgramming($nums)
    {
        // Result must contain at least one number, it could be negative, so initialize with minimun integer
        $maxSum = PHP_INT_MIN;
        $currentSum = 0;

        for ($i = 0; $i < count($nums); $i++) {
            $currentSum = $currentSum + $nums[$i];
            // echo "Current sum is: $currentSum\n";

            if ($maxSum < $currentSum) {
                $maxSum = $currentSum;
            }

            // Initialize $currentSum again -> choose not to pick the current sum
            if ($currentSum < 0) {
                $currentSum = 0;
            }
        }

        return $maxSum;
    }
}

$input = [-1, 1, 3, -7, 5, -2];
$prova = new Solution;
var_dump($input);
var_dump($prova->maxSubArrayDynamicProgramming($input));
