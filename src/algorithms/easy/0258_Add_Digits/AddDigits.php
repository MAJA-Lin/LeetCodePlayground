<?php

class Solution
{
    /**
     * Version with the loop/recursion
     *
     * @param Integer $num
     * @return Integer
     */
    function addDigitsWithLoopAndRecursion($num)
    {
        $result = 0;
        while ($num > 0) {
            $result = $result + $num % 10;
            $num = $num / 10;
        }

        if ($result >= 10) {
            $result = $this->addDigits($result);
        }

        return $result;
    }

    /**
     * Using digital root formula
     *
     * @param Integer $num
     * @return Integer
     */
    function addDigits($num)
    {
        if ($num <= 9) {
            return $num;
        }

        return $num - (9 * floor(($num - 1) / 9));
    }
}
