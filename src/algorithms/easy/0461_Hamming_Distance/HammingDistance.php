<?php

class HammingDistance
{
    public function hammingDistance(int $x, int $y)
    {
        $binaryX = decbin($x);
        $binaryY = decbin($y);

        # Make sure the length are equal
        $lengthCompareResult = strlen($binaryX) <=> strlen($binaryY);
        if ($lengthCompareResult >1) {
            $binaryY = str_pad($binaryY, strlen($binaryX), '0', STR_PAD_LEFT);
        } elseif ($lengthCompareResult < 1) {
            $binaryX = str_pad($binaryX, strlen($binaryY), '0', STR_PAD_LEFT);
        }

        echo($binaryX);
        echo "\n";
        echo($binaryY);

        $result = 0;
        for ($i = 0; $i < strlen($binaryX); $i++) {
            if ($binaryX[$i] !== $binaryY[$i]) {
                $result++;
            }
        }

        return $result;
    }
}
