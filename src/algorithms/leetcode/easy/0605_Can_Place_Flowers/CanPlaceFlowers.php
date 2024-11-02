<?php

class Solution
{
    /**
     * @param Integer[] $flowerbed
     * @param Integer $n
     * @return Boolean
     */
    function canPlaceFlowers($flowerbed, $n)
    {
        $possilbePostion = [];

        // Fetch last key
        end($flowerbed);
        $endKey = key($flowerbed);
        reset($flowerbed);

        foreach ($flowerbed as $key => $hasFlower) {
            $left = ($key == 0) ? 0 : $flowerbed[$key - 1];
            $right = ($key == $endKey) ? 0 : $flowerbed[$key + 1];

            if ($left == 0 && $right == 0 && $hasFlower == 0) {
                $flowerbed[$key] = 1;
                $n--;
            }
        }

        if ($n > 0) {
            return false;
        }

        return true;
    }

    /**
     * The optimization version of canPlaceFlower
     * @param Integer[] $flowerbed
     * @param Integer $n
     * @return Boolean
     */
    function canPlaceFlowersOptimize($flowerbed, $n)
    {
        $count = 0;

        for ($key = 0; $key < sizeof($flowerbed); $key++) {
            if ($flowerbed[$key] == 0) {
                $left = ($key == 0) ? 0 : $flowerbed[$key - 1];
                $right = ($key == sizeof($flowerbed) - 1) ? 0 : $flowerbed[$key + 1];

                if ($left == 0 && $right == 0) {
                    $flowerbed[$key] = 1;
                    $count++;
                }
            }
        }

        return $count >= $n;
    }
}
