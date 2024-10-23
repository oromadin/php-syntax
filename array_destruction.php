<?php

function ex_1() {
	$array = [1, 2, 3]; 

	// Using the list syntax:
	list($a, $b, $c) = $array;

	// Or the shorthand syntax:
	[$a, $b, $c] = $array;

	// $a = 1
	// $b = 2
	// $c = 3
	var_dump(compact(['a', 'b', 'c']));
}
ex_1();