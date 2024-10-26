<?php

$array = [1, 2, 3];

list($a, $b, $c) = $array;
[$a1, $b1, $c1] = $array;

list(, $d) = $array;
[, , $d1] = $array;

[$a2] = $array;
