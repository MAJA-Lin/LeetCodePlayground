<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function dominantIndex($nums)
    {
        $largestIndex = -1;
        $max = 0;
        $secondMax = 0;

        for ($i = 0; $i < sizeof($nums); $i++) {
            if ($nums[$i] > $max) {
                $secondMax = $max;
                $largestIndex = $i;
                $max = $nums[$i];
            } elseif ($nums[$i] > $secondMax) {
                $secondMax = $nums[$i];
            }
        }

        if ($max >= $secondMax * 2) {
            return $largestIndex;
        }

        return -1;
    }
}
