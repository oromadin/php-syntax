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
    printf("id: %s, name: %s\n", $id, $name);
}
