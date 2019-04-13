<?php

class Solution
{
    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary($a, $b)
    {
        $aArray = str_split($a);
        $bArray = str_split($b);
        $aLength = strlen($a) - 1;
        $bLength = strlen($b) - 1;
        $carry = 0;
        $result = null;

        while ($aLength >= 0 || $bLength >= 0 || $carry == 1) {
            $aByte = 0;
            if ($aLength >= 0) {
                $aByte = $aArray[$aLength];
            }

            $bByte = 0;
            if ($bLength >= 0) {
                $bByte = $bArray[$bLength];
            }

            // Simply use xor to get 1 or 0
            $result = ((int) $aByte ^ (int) $bByte ^ (int) $carry) . $result;

            // If-else is way faster than floor()
            // $carry = floor(($aByte + $bByte + $carry) / 2);
            if (($aByte + $bByte + $carry) >= 2) {
                $carry = 1;
            } else {
                $carry = 0;
            }

            // echo "A Length: $aLength; byte: $aByte\n";
            // echo "B Length: $bLength; byte: $bByte\n";
            // echo "Next Carry: $carry\n";
            // echo "Result: $result\n";

            $aLength--;
            $bLength--;
        }

        return $result;
    }
}

$test = new Solution;
var_dump($test->addBinary("11", "1"));
// var_dump($test->addBinary("1010", "1011"));
// var_dump($test->addBinary("1111", "1111"));
// var_dump($test->addBinary("100", "110010"));
