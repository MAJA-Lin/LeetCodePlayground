<?php

// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($T):int {
    return findHeight($T);
}

function findHeight($tree) {
    if (is_null($tree)) {
        return -1;
    }

    return 1 + max(findHeight($tree->l), findHeight($tree->r));

    // $left = findHeight($tree->l);
    // $right = findHeight($tree->r);

    // if ($left > $right) {
    //     return $left++;
    // } else {
    //     return $right++;
    // }
}

// class Tree {
//     public $value = 0;
//     public $l = null;
//     public  $r = null;
// }