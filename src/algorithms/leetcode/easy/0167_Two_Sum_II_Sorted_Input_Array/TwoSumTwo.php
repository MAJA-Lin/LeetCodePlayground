<?php

class Solution
{
    /**
     * @param Integer[] $numbers
     * @param Integer $target
     * @return Integer[]
     */
    public function twoSum($numbers, $target)
    {
        $length = count($numbers);
        if ($length < 2) {
            return [];
        }

        $left = 0;
        $right = $length - 1;
        while ($left < $right) {
            $sum = $numbers[$left] + $numbers[$right];

            if ($sum == $target) {
                return [$left + 1, $right + 1];
            }

            if ($sum < $target) {
                $left++;
            } elseif ($sum > $target) {
                $right--;
            }
        }
    }
}

$prova = new Solution;
var_dump($prova->twoSum([2, 7, 11, 15], 9));
var_dump($prova->twoSum([3, 2, 4], 6));
