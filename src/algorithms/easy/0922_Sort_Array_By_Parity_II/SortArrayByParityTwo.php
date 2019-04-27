<?php

class Solution
{
    /**
     * @param Integer[] $a
     * @return Integer[]
     */
    public function sortArrayByParityIIBrute($a)
    {
        $odd = [];
        $even = [];
        $length = count($a);

        for ($i = 0; $i < $length; $i++) {
            if ($i % 2 == 0) {
                if ($a[$i] % 2 !== 0) {
                    $odd[] = $a[$i];
                    $a[$i] = null;
                }
            } else {
                if ($a[$i] % 2 !== 1) {
                    $even[] = $a[$i];
                    $a[$i] = null;
                }
            }
        }

        for ($i = 0; $i < $length; $i++) {
            if (!isset($a[$i])) {
                if ($i % 2 == 0) {
                    $a[$i] = array_pop($even);
                } else {
                    $a[$i] = array_pop($odd);
                }
            }
        }

        return $a;
    }

    /**
     * Use XOR to reduce running time. So far the fastest solution in PHP
     * @param Integer[] $a
     * @return Integer[]
     */
    public function sortArrayByParityIIOptimized($a)
    {
        $odd = [];
        $even = [];
        $length = count($a);

        for ($i = 0; $i < $length; $i++) {
            $indexIsOdd = $i % 2;
            $valueIsOdd = $a[$i] % 2;

            if ($indexIsOdd ^ $valueIsOdd == 1) {
                if ($valueIsOdd == 1) {
                    $odd[] = $a[$i];
                } else {
                    $even[] = $a[$i];
                }

                $a[$i] = null;
            }
        }

        for ($i = 0; $i < $length; $i++) {
            if (!isset($a[$i])) {
                if ($i % 2 == 0) {
                    $a[$i] = array_pop($even);
                } else {
                    $a[$i] = array_pop($odd);
                }
            }
        }

        return $a;
    }

    /**
     * Follow https://leetcode.com/problems/sort-array-by-parity-ii/discuss/181500/
     *  But it's slower than Optimized one
     *
     * @param Integer[] $a
     * @return Integer[]
     */
    public function sortArrayByParityIITwoPointers($a)
    {
        $even = 0;
        $odd = 1;
        $length = count($a);

        while ($even < $length && $odd < $length) {
            if ($a[$even] % 2 !== 0) {
                $temp = $a[$even];
                $a[$even] = $a[$odd];
                $a[$odd] = $temp;

                $odd = $odd + 2;
            } else {
                $even = $even + 2;
            }
        }

        return $a;
    }

    /**
     * Follow https://leetcode.com/problems/sort-array-by-parity-ii/discuss/181160
     *  Another two pointers solution.
     *
     * @param Integer[] $a
     * @return Integer[]
     */
    public function sortArrayByParityIITwoPointersTwo($a)
    {
        $even = 0;
        $odd = 1;
        $length = count($a);

        while ($even < $length && $odd < $length) {
            while ($even < $length && $a[$even] % 2 == 0) {
                $even += 2;
            }

            while ($odd < $length && $a[$odd] % 2 == 1) {
                $odd += 2;
            }

            if ($even < $length && $odd < $length) {
                $temp = $a[$even];
                $a[$even] = $a[$odd];
                $a[$odd] = $temp;
            }
        }

        return $a;
    }
}

$prova = new Solution;
var_dump($prova->sortArrayByParityII([4,2,5,7]));
