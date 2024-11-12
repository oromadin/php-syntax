<?php

/*Shorthand Ternary Operator*/

function load_user(){
  return [];
}

function load_user2(){
  return 'abc';
}

function load_user3(){
  return null;
}

$xxx = [1, 5, 6];

$user = load_user() ? load_user() : false;
var_dump($user);

$user = load_user() ?: false;
var_dump($user);

$user = load_user2() ?: false;
var_dump($user);

$user = load_user3() ?: false;
var_dump($user);

$user = $xxx ?: false;
var_dump($user);

$user = isset($x) ?: 'cdf';
var_dump($user);

$user = $x ?: 'cdf';
var_dump($user);
