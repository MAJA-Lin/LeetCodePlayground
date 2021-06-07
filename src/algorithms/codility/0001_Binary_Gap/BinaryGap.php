<?php
// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($n): int
{
    $binaryArray = str_split(decbin($n));

    $length = count($binaryArray);
    $maxGap = 0;
    $leftIndex = $rightIndex = PHP_INT_MIN;

    for ($i = 0; $i < $length; $i++) {
        if ($binaryArray[$i] == 1) {
            // Initiate left index
            if ($leftIndex === PHP_INT_MIN) {
                $leftIndex = $i;
                continue;
            }

            if ($leftIndex > PHP_INT_MIN && $rightIndex === PHP_INT_MIN) {
                $rightIndex = $i;
            }

            $gap = $rightIndex - $leftIndex - 1;
            $maxGap = ($maxGap < $gap) ? $gap : $maxGap;

            // Set indexes for next gap calculation
            $leftIndex = $i;
            $rightIndex = PHP_INT_MIN;
        }
    }

    return $maxGap;
}
