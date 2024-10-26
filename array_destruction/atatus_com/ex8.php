<?php

// Using default values for missing array keys

$data = ['foo' => 'bar'];
$value = $data['key'];

echo $value;

$data = ['foo' => 'bar'];
$value = $data['key'] ?? 'default';

echo $value;
