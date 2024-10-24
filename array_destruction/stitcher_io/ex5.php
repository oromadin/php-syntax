<?php

$array = [
    [
        'name' => 'a',
        'id' => 1
    ],
    [
        'name' => 'b',
        'id' => 2
    ],
];

foreach ($array as ['id' => $id, 'name' => $name]) {
    var_dump($id);
    var_dump($name);
}

// int(1)
// string(1) "a"
// int(2)
// string(1) "b"