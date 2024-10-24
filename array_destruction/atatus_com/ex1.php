<?php

$array = [10, 20, 30];
[$a, $b, $c] = $array;

var_dump($a);
var_dump($b);
var_dump($c);
// int(10)
// int(20)
// int(30)

[$x, $y, $z] = [100, 200, 300];

var_dump($x);
var_dump($y);
var_dump($z);
// int(100)
// int(200)
// int(300)

var_dump([$a, $b, $c]);
// array(3) {
//   [0]=>
//   int(10)
//   [1]=>
//   int(20)
//   [2]=>
//   int(30)
// }

var_dump([$x, $y, $z]);
// array(3) {
//   [0]=>
//   int(100)
//   [1]=>
//   int(200)
//   [2]=>
//   int(300)
// }