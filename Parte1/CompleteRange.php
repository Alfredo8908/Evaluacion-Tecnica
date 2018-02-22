<?php

class CompleteRange
{
    public function build($range)
    {
        $minValue = min($range);
        $maxValue = max($range);

        return range($minValue, $maxValue);
    }
}
$test = new CompleteRange();
echo 'rango 1: [1, 2, 4, 5] ';
print_r($test->build(array(1, 2, 4, 5)));

echo 'rango 2: [2, 4, 9]';
print_r($test->build([2, 4, 9]));

echo 'rango 3: [55, 58, 60]';
print_r($test->build([55, 58, 60]));



?>