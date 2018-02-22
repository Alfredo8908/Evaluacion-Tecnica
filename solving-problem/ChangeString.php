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
                $index = $indexTemp + 1;
                if ($indexTemp == (count($letters) - 1)) {
                    $index = 0;
                }
                $textTemp = $letters[$index];
                if ($letter == strtoupper($letter)) {
                    $textTemp = strtoupper($letters[$index]);
                }
                $textResult .= $textTemp;
            }
        }
        return $textResult;
    }
}
$change = new ChangeString();
echo "EJERCICIO ( 123 abcd * 3 ): " . $change->build("123 abcd * 3 ", ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"]);
echo " EJERCICIO ( **Casa 52 : )" . $change->build("**Casa 52", ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"]);
echo " EJERCICIO ( **Casa 52Z : )" . $change->build("**Casa 52Z", ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"]);

