<?php
	
$array = [1, 2, 3]; 

// Using the list syntax:
list($a, $b, $c) = $array;

// Or the shorthand syntax:
[$a, $b, $c] = $array;

// $a = 1
// $b = 2
// $c = 3
var_dump(compact(['a', 'b', 'c']));

[, , $d] = $array;

// $d = 3
// Also note that list will always start at index 0. Take for example the following array:

var_dump($d);