<?php

class Solution
{
    /**
     * @param String[] $strs
     * @return String
     */
    public function longestCommonPrefix($strs)
    {
        $length = PHP_INT_MAX;
        $commonPrefix = "";

        if (empty($strs)) {
            return $commonPrefix;
        }

        // Get minimum length
        foreach ($strs as $str) {
            if (strlen($str) < $length) {
                $length = strlen($str);
            }
        }

        for ($i = 0; $i < $length; $i++) {
            $currentChar = $strs[0][$i];

            foreach ($strs as $key => $str) {
                if ($str[$i] !== $currentChar) {
                    break(2);
                }
            }

            $commonPrefix = $commonPrefix . $currentChar;
        }

        return $commonPrefix;
    }
}


$test = new Solution;
// var_dump($test->longestCommonPrefix(["flower","flow","flight"]));
var_dump($test->longestCommonPrefix([]));
