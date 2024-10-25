S<?php

// Undefined or missing array keys

// $data = ['name' => 'John Doe'];
// [$name, $email] = $data;  // PHP Notice: Undefined offset: 1

// // Проверяем есть ли ключ
// $data = ['name' => 'John Doe'];
// [$name, $email] = $data + [null, null];

// var_dump($name); // null
// var_dump($email); // null

// Incorrect array structures

$data = ['John Doe', 'john@example.com'];
[$name, $email, $phone] = $data;

$data = ['John Doe', 'john@example.com'];
[$name, $email] = $data;