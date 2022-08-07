<?php

/**
 * Question link: https://app.codility.com/programmers/trainings/4/first_unique/
 */
// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    $hash = [];
    foreach ($A as $element) {
        // Prevent number as index error
        $index = (string) $element;
        if (isset($hash[$index])) {
            $hash[$index]++;
        } else {
            $hash[$index] = 1;
        }
    }

    foreach ($A as $element) {
        $index = (string) $element;
        if ($hash[$index] == 1) {
            return $element;
        }
    }

    return -1;
}

