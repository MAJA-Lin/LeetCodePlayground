<?php

class Solution
{
    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOneWithChangeArrayToInteger($digits)
    {
        $number = (int) implode('', $digits);
        $number++;
        $result = [];

        while ($number >= 1) {
            array_unshift($result, $number % 10);
            $number = $number / 10;
        }

        return $result;
    }

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits)
    {
        for ($i = sizeof($digits) - 1; $i >= 0; $i--) {
            $number = $digits[$i] + 1;

            if ($number <= 9) {
                $digits[$i] = $number;
                return $digits;
            }

            $digits[$i] = 0;
        }

        if ($digits[0] == 0) {
            array_unshift($digits, 1);
        }

        return $digits;
    }
}
