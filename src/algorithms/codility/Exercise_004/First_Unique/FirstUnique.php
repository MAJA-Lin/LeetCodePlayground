<?php

/**
 * Question link: https://app.codility.com/programmers/trainings/4/first_unique/
 */
// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    $hash = [];
    $unique = [];
    foreach ($A as $element) {
        // Prevent number as index error
        $index = (string) $element;
        if (isset($hash[$index])) {
            $hash[$index]++;

            if (($key = array_search($element, $unique)) !== false) {
                unset($unique[$key]);
            }
        } else {
            $hash[$index] = 1;
            $unique[] = $element;
        }
    }

    if (empty($unique)) {
        return -1;
    }

    return reset($unique);
}

