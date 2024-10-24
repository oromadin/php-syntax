<?php
	
$array = [1, 2, 3]; 

// Using the list syntax:
list($a, $b, $c) = $array;

// Or the shorthand syntax:
[$a, $b, $c] = $array;

var_dump(compact(['a', 'b', 'c']));
// $a = 1
// $b = 2
// $c = 3

//Skip elements
[, ,$d] = $array;
list( , $x) = $array;
[$f] = $array;

// $d = 3
// $x = 2
// $f = 1
var_dump($d);
var_dump($x);
var_dump($f);