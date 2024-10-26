<?php

$assoc_array = [
    'name' => 'John',
    'age' => 30,
    'gender' => 'male'
];

list(
    'name' => $name,
    'age' => $age,
    'gender' => $gender
) = $assoc_array;

var_dump(compact(['name', 'age', 'gender']));

// array(3) {
//   ["name"]=>
//   string(4) "John"
//   ["age"]=>
//   int(30)
//   ["gender"]=>
//   string(4) "male"
// }

list(
    'age' => $a,
    'name' => $n,
    'gender' => $g
) = $assoc_array;

var_dump(compact(['n', 'g', 'a']));

// array(3) {
//   ["n"]=>
//   string(4) "John"
//   ["g"]=>
//   string(4) "male"
//   ["a"]=>
//   int(30)
// }

[
    'age' => $x,
    'name' => $y,
    'gender' => $z
] = $assoc_array;

var_dump(compact(['x', 'y', 'z']));

// array(3) {
//   ["x"]=>
//   int(30)
//   ["y"]=>
//   string(4) "John"
//   ["z"]=>
//   string(4) "male"
// }
