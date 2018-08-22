<?php

function flippingAnImage(array $input): array
{
    foreach ($input as $key => $row) {
        foreach (array_reverse($row) as $innerKey => $point) {
            $input[$key][$innerKey] = !$point;
        }
    }

    return $input;
}
