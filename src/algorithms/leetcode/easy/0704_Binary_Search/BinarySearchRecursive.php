<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target)
    {
        $left = 0;
        $right = count($nums) - 1;

        return $this->binarySearch($nums, $left, $right, $target);
    }

    function binarySearch($nums, int $left, int $right, $target)
    {
        if ($left > $right) {
            return -1;
        }

        $mid = ceil($left + (($right - $left) / 2));
        if ($nums[$mid] > $target) {
            return $this->binarySearch($nums, $left, $mid - 1, $target);
        }

        if ($nums[$mid] < $target) {
            return $this->binarySearch($nums, $mid + 1, $right, $target);
        }

        return $mid;
    }
}


$mew = new Solution;
$testCaseA = [];
$testCaseB = [-1, 0, 3, 5, 9, 12, 24, 33, 35, 36, 39, 42, 55, 103, 240, 299, 554];
var_dump($mew->search($testCaseB, 33));
