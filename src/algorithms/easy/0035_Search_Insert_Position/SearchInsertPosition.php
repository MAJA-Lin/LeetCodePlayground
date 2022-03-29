<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target)
    {
        $left = 0;
        $right = sizeof($nums) - 1;

        while ($left <= $right) {
            $index = floor($left + (($right - $left) / 2));

            if ($nums[$index] == $target) {
                return $index;
            }

            if ($target > $nums[$index]) {
                $left = $index + 1;
            } else {
                $right = $index - 1;
            }
        }

        return $left;
    }
}


$mew = new Solution;
$exampleA = [1,3,5,6];
$exampleB = [-1,0,3,5,9,12];
var_dump($mew->searchInsert($exampleA, 7));
