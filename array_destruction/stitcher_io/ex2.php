<?php

//начало индексирования массива не с 0
$array = [
    1 => 'a',
    2 => 'b',
    3 => 'c',
];

list($a, $b, $c) = $array;

var_dump(compact(['a', 'b', 'c']));
// PHP Warning:  Undefined array key 0 on line 9
// array(3) {
//   ["a"]=>
//   NULL
//   ["b"]=>
//   string(1) "a"
//   ["c"]=>
//   string(1) "b"
// }

var_dump($a);
var_dump($b);
var_dump($c);
// $a = null
// $b = 'a'
// $c = 'b'
