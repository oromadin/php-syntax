<?php

/*Null Coalescing Assignment operator*/

//Was
$value = $value ?? 'foo';

//Became
$value ??= 'foo';

$y = 'foo';
$z = false;

$user = $user ?? 'abc';
var_dump($user);

$b ??= 'xxx';
var_dump($b);

$y ??= 'baz';
var_dump($y);

$z ??= 'baz';
var_dump($z);
