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
        $right = sizeof($nums) - 1;

        while ($left <= $right) {
            $index = ceil($left + (($right - $left) / 2));

            if ($nums[$index] == $target) {
                return $index;
            }

            if ($target > $nums[$index]) {
                $left = $index + 1;
            } else {
                $right = $index - 1;
            }
        }

        return -1;
    }
}


$mew = new Solution;
var_dump($mew->search([-1,0,3,5,9,12], 9));
