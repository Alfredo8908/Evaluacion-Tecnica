<?php

class ChangeString
{

    public function build($text, $letters)
    {
        $textResult = '';
        for ($i = 0; $i < strlen($text); $i++) {
            $letter = substr($text, $i, 1);

            if (!in_array(strtolower($letter), $letters)) {
                $textResult .= $letter;
            } else {
                $indexTemp = array_search(strtolower($letter), $letters);
                $index = ($indexTemp == (count($letter) - 1)) ? 0 : ($indexTemp + 1);
                $textResult .= ($letter == strtoupper($letter)) ? strtoupper($letters[$index]) : $letters[$index];
            }
        }
        return $textResult;
    }
}

$change = new ChangeString();
echo "EJERCICIO (123 abcd * 3 ): " . $change->build("123 abcd * 3 ", ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "ñ", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", ]);