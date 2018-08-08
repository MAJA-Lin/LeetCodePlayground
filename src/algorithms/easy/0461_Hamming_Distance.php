<?php

class Hamming_Distance
{
    public function hammingDistance(int $x, int $y)
    {
        $decimalX = decbin($x);
        $decimalY = decbin($y);

        # Make sure the length are equal
        if (strlen($decimalX) > strlen($decimalY)) {
            $decimalY = str_pad($decimalY, strlen($decimalX), '0', STR_PAD_LEFT);
        } elseif (strlen($decimalX) < strlen($decimalY)) {
            $decimalX = str_pad($decimalX, strlen($decimalY), '0', STR_PAD_LEFT);
        }

        echo($decimalX);
        echo "\n";
        echo($decimalY);

        $result = 0;
        for ($i = 0; $i < strlen($decimalX); $i++) {
            if ($decimalX[$i] !== $decimalY[$i]) {
                $result++;
            }
        }

        return $result;
    }
}
