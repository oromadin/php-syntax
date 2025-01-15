<?php

// Arrays. General

$a = array(45, 'abc');
$b = [45, 'abc'];

$c = [10 => 45, 'abc', 45.32, 45 => 'abc', 34, 'a' => 'abc', 56, 0 => 45, 5 => 'dgf', 90, -10 => 34, 45];

$d[45] = 'abc';
$d[30] = 34;
$d['a'] = 11;

$f[] = 'abc';
$f[] = 34;
$f[] = 11;

$var = 'Hello, world';
$arr = (array) $var;

$g = array_fill(0, 16, 'Hello, world!');

$e = range(10, 0, -0.2);

//--------------------------------------

echo '<pre>';
print_r($a);
echo '</pre>';

echo '<pre>';
print_r($b);
echo '</pre>';

echo '<pre>';
print_r($c);
echo '</pre>';

echo '<pre>';
print_r($d);
echo '</pre>';

echo '<pre>';
print_r($f);
echo '</pre>';

echo '<pre>';
print_r($arr);
echo '</pre>';

echo '<pre>';
print_r($g);
echo '</pre>';

echo '<pre>';
print_r($e);
echo '</pre>';
