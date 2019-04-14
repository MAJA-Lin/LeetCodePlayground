<?php

class Solution
{
    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle)
    {
        if (empty($needle)) {
            return 0;
        }

        $haystackArray = str_split($haystack);
        $needleArray = str_split($needle);
        $haystackLength = sizeof($haystackArray);
        $needleLength = sizeof($needleArray);

        for ($i = 0; $i <= ($haystackLength - $needleLength); $i++) {
            $skip = false;
            if ($haystackArray[$i] == $needleArray[0]) {
                for ($j = 1; $j < $needleLength; $j++) {
                    if ($haystackArray[$i + $j] != $needleArray[$j]) {
                        $skip = true;
                        break;
                    }
                }

                if ($skip == false) {
                    return $i;
                }
            }
        }

        return -1;
    }
}

$test = new Solution;
var_dump($test->strStr("mississippi", "issip"));
