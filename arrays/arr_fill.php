<?php

// array_fill(int $start_index, int $count, mixed $value) : array

function fill_array(int $start, int $count, mixed $value) : array
{
    $arr = [];

    for ($i = $start; $i <= $start + $count - 1; $i++) {
        $arr[$i] = $value;
    }

    return $arr;
}

$arr = fill_array(4, 5, 'abc');
$arr1 = array_fill(4, 5, 'abc');

echo '<pre>';
print_r($arr);
echo '</pre>';

echo '<pre>';
print_r($arr1);
echo '</pre>';
