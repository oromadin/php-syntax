<?php

$arr = [1, 2, 3];
list($one, $two, $three) = $arr;

echo $one;   // 1
echo $two;   // 2
echo $three; // 3
echo '<br>';

$a = ['a' => 4, 5, 'b' => 6, 7, 9];
list($a, $b, $c) = $a;

echo $a . $b . $c;
echo '<br>';

$arr = [14, 15];
list($a1, $b1, $c1) = $arr;

echo $a1 . $b1 . $c1;
echo '<br>';

$x = 4;
$y = 5;

list($x, $y) = [$y, $x];
var_dump($x, $y);

[$y, $x] = [$x, $y];
var_dump($x, $y);
