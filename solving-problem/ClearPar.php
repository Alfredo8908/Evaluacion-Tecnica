<?php

class ClearPar
{


    public function build($in)
    {
        $repetCount = substr_count($in, "()");
        $ccant = str_repeat("()", $repetCount);
        return $ccant;
        //$repeat = iconv_strlen($in);
        //return $repeat;
    }
}

$test = new ClearPar();
echo "EJERCICIO ===()())()===" . $test->build("()())()");
echo "   EJERCICIO ===()(()===" . $test->build("()(()");
echo "   EJERCICIO ===)(===" . $test->build(")(");
echo "   EJERCICIO ===((()===" . $test->build("((()");


