<?php

$array = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
];

['c' => $c, 'a' => $a] = $array;

var_dump($c);
var_dump($a);

// $c = 3;
// $a = 1;
