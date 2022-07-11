<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function thirdMax($nums)
    {
        $first = null;
        $second = null;
        $third = null;

        for ($i = 0; $i < count($nums); $i++) {
            // To ignore repeated elements (e.g. [1, 2, 3, 3, 3])
            // The condition might change (sometimes just get the third 3 as third max)
            if ($first === $nums[$i] || $second === $nums[$i] || $third === $nums[$i]) {
                continue;
            }

            if (!isset($first) || $nums[$i] > $first) {
                $third = $second;
                $second = $first;
                $first = $nums[$i];
            } elseif (!isset($second) || $nums[$i] > $second) {
                $third = $second;
                $second = $nums[$i];
            } elseif (!isset($third) || $nums[$i] > $third) {
                $third = $nums[$i];
            }
        }

        // If it does not exist, return the maximum number
        if (!isset($third)) {
            $third = $first;
        }

        return $third;
    }
}