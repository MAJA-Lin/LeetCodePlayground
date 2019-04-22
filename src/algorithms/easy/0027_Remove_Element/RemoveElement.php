<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    public function removeElement(&$nums, $val)
    {
        $length = count($nums);

        for ($i = 0; $i < $length; $i++) {
            if ($nums[$i] == $val) {
                unset($nums[$i]);
            }
        }

        return count($nums);
    }
}

$prova = new Solution;
$test = [0,1,2,2,3,0,4,2];
var_dump($prova->removeElement($test, 2));
var_dump($test);
