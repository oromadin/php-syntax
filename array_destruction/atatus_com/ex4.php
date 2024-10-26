<?php

$assoc_array = [
    'name' => 'John',
    'age' => 30,
    'gender' => 'male'
];

list('name' => $name, 'age' => $age, 'gender' => $gender) = $assoc_array;

['age' => $a, 'name' => $n, 'gender' => $g] = $assoc_array;
