<?php

class Solution
{

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s)
    {
        $length = sizeof($s);

        $i = 0;
        $j = $length -1;

        while ($i < $j) {
            // echo "Forward: $i\n";
            // echo "Backward: $j\n";
            $tmp = $s[$i];
            $s[$i] = $s[$j];
            $s[$j] = $tmp;

            $i++;
            $j--;

            // echo "[Next] Forward: $i; Backward: $j\n";
        }

        return $s;
    }
}

$prova = new Solution;
$testCase = ["h","e","l","q", "g", "y"];
var_dump($prova->reverseString($testCase));
