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

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function pivotIndexOpimization($nums)
    {
        // totalSum = leftSum + rightSum + pivotVulue
        // -pivotValue = -totalSum + leftSum + rightSum
        // pivotValue = totalSum - leftSum - rightSum
        // When we get pivotValue, leftSum will equal to rightSum
        // pivotValue = totalSum - (2 * halfPartOfSum)

        $totalSum = array_sum($nums);
        $tempSum = 0;

        for ($i=0; $i < sizeof($nums); $i++) {
            if ($nums[$i] == $totalSum - 2 * $tempSum) {
                return $i;
            }

            $tempSum = $tempSum + $nums[$i];
        }

        return -1;
    }
}
