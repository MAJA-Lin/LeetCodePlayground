<?php

class Solution
{
    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x)
    {
        if ($x < 0) {
            return false;
        }

        $originX = $x;
        $y = 0;

        while ($x >= 1) {
            $y = $y * 10;
            $y = $y + $x % 10;
            $x = $x / 10;
        }

        return $y == $originX;
    }
}
