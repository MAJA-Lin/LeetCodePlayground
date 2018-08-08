<?php

class UniqueMorseCodeWords
{
    public function morseConverter(array $words): array
    {
        $morseTable = [
            "a" => ".-",
            "b" => "-...",
            "c" => "-.-.",
            "d" => "-..",
            "e" => ".",
            "f" => "..-.",
            "g" => "--.",
            "h" => "....",
            "i" => "..",
            "j" => ".---",
            "k" => "-.-",
            "l" => ".-..",
            "m" => "--",
            "n" => "-.",
            "o" => "---",
            "p" => ".--.",
            "q" => "--.-",
            "r" => ".-.",
            "s" => "...",
            "t" => "-",
            "u" => "..-",
            "v" => "...-",
            "w" => ".--",
            "x" => "-..-",
            "y" => "-.--",
            "z" => "--..",
        ];
        $result = [];

        foreach ($words as $key => $word) {
            $result[$key] = '';

            for ($i = 0; $i < strlen($word); $i++) {
                $result[$key] = $result[$key] . $morseTable[$word[$i]];
            }
        }

        return $result;
    }
}
