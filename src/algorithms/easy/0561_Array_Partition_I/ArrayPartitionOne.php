<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function arrayPairSum($nums)
    {
        $length = sizeof($nums);
        $sum = 0;

        sort($nums);

        for ($i = 0; $i < $length / 2; $i++) {
            $sum = $sum + $nums[2 * $i];
        }

        return $sum;
    }
}

$prova = new Solution;
var_dump($prova->arrayPairSum([1,4,3,2]));
var_dump($prova->arrayPairSum([1,7,9,9,3,3]));
