<?php

function judgeRouteCircle(string $moves): bool
{
    $up = 'U';
    $down = 'D';
    $left = 'L';
    $right = 'R';

    $upDown = 0;
    $leftRight = 0;

    for ($i = 0; $i <strlen($moves); $i++) {
        switch ($moves[$i]) {
            case $up:
                $upDown++;
                break;
            case $down:
                $upDown--;
                break;
            case $left:
                $leftRight++;
                break;
            case $right:
                $leftRight--;
                break;
        }
    }

    return ($upDown && $leftRight);
}
