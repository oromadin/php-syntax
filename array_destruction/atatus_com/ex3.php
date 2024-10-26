<?php

$array = [10, 20, 30];
list($a, $b, $c) = $array;

var_dump($a);
var_dump($b);
var_dump($c);

// int(10)
// int(20)
// int(30)

$array2 = [100, 200, 300];
list($a, , $c) = $array2;

var_dump($a);
var_dump($b);
var_dump($c);

// int(100)
// int(20)
// int(300)

$array3 = [111, 222, 333];
[$a, , $c] = $array3;

var_dump($a);
var_dump($b);
var_dump($c);

// int(111)
// int(20)
// int(333)
