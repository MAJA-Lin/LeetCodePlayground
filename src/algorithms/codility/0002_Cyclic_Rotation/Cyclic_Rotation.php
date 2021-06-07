<?php
// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution(array $a, int $k) {
    $length = count($a);
    $maxIndex = $length - 1;

    if ($length === $k) {
        return $a;
    }

    $rotatedArray = [];
    for ($i = 0; $i < $length; $i++) {
        // $indexToGo = (($estimatedIndex = ($i + $k)) > $maxIndex) ? ($estimatedIndex % $length) : $estimatedIndex;
        // $rotatedArray[$indexToGo] = $a[$i];
        $rotatedArray[($i + $k) % $length] = $a[$i];
    }

    // var_dump($rotatedArray);
    return $rotatedArray;
}
