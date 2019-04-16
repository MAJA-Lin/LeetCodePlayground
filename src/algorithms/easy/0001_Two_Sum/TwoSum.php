<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    public function twoSumBrute($nums, $target)
    {
        $length = count($nums);

        for ($i = 0; $i < $length - 1; $i++) {
            for ($j = $i + 1; $j < $length; $j++) {
                if ($nums[$i] + $nums[$j] == $target) {
                    return [$i, $j];
                }
            }
        }
    }

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    public function twoSum($nums, $target)
    {
        $length = count($nums);

        for ($i = 0; $i < $length; $i++) {
            if (in_array($target - $nums[$i], $nums)) {
                $searchKey = array_search($target - $nums[$i], $nums);

                if ($i == $searchKey) {
                    // Skip same element
                    continue;
                }

                return [$i, $searchKey];
            }
        }
    }

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    public function twoSumOptimize($nums, $target)
    {
        $targetDifferences = [];

        foreach ($nums as $key => $num) {
            if (in_array($num, $targetDifferences)) {
                return [array_search($num, $targetDifferences), $key];
            }

            $targetDifferences[$key] = $target - $num;
        }
    }

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    public function twoSumOptimizeWithoutUsingArraySearchMethod($nums, $target)
    {
        // Create a map (which is php array) which is [$value -> $key] of $nums
        $map = array_flip($nums);

        foreach ($nums as $key => $num) {
            $diff = $target - $num;
            if (isset($map[$diff]) && $key != $map[$diff]) {
                return [$key, $map[$diff]];
            }
        }
    }
}

$prova = new Solution;
var_dump($prova->twoSum([2, 7, 11, 15], 22));
var_dump($prova->twoSumOptimize([3, 2, 4], 6));
