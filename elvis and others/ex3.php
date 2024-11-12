<?php

/*Null Coalescing Operator*/

// was
$result = isset($_GET['value']) ? $_GET['value'] : 'foo';

//became
$result = $_GET['value'] ?? 'foo';

$y = null;
$foo = false;

$user = isset($x) ?: 'cdf';
var_dump($user);

$user = $x ?: 'cdf';
var_dump($user);

$user = $x ?? 'cdf';
var_dump($user);

$user = $y ?: 'cdf';
var_dump($user);

$user = $y ?? 'cdf';
var_dump($user);

$user = $z ?? 'aaa';
var_dump($user);

$user = $foo ?? 'foo';
var_dump($user);
