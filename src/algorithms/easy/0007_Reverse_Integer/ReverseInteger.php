<?php

class Solution
{
    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x)
    {
        $isNegative = false;

        if ($x < 0) {
            $x = -$x;
            $isNegative = true;
        }

        $y = 0;

        while ($x >= 1) {
            $y = $y * 10;
            $y = $y + $x % 10;
            $x = $x / 10;
        }

        if ($isNegative) {
            $y = -$y;
        }

        if ($y > pow(2, 31) -1 || $y < -pow(2, 31)) {
            return 0;
        }

        return $y;
    }
}
