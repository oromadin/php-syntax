<?php

$array = [10, 20, 30, 40];
[$a, $b] = $array;

var_dump($a);
var_dump($b);

// $a = 10
// $b = 20
// 30, 40 ignored

$array = [10];
[$a, $b, $c] = $array;

var_dump($a);
var_dump($b);
var_dump($c);

// PHP Warning:  Undefined array key 1
// PHP Warning:  Undefined array key 2
// $a = 10
// $b = null
// $c = null