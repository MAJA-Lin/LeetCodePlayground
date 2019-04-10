<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function pivotIndex($nums)
    {
        for ($i = 0; $i < sizeof($nums); $i++) {
            $leftSum = ($i == 0) ? 0 :array_sum(array_slice($nums, 0, $i));
            $rightSum = array_sum(array_slice($nums, $i + 1));

            if ($leftSum == $rightSum) {
                return $i;
            }
        }

        return -1;
    }
}
