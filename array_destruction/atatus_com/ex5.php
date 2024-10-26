<?php

//Swapping variable values using array destructuring

$customer = [
  'name' => 'John Doe',
  'email' => 'johndoe@example.com',
  'phone' => '555-1234',
];

echo "Customer data before swap: \n";
print_r($customer);

[
    $customer['email'],
    $customer['phone']
] = [
    $customer['phone'],
    $customer['email']
];

echo "Customer data after swap: \n";
print_r($customer);

// Customer data before swap:
// Array
// (
//     [name] => John Doe
//     [email] => johndoe@example.com
//     [phone] => 555-1234
// )
// Customer data after swap:
// Array
// (
//     [name] => John Doe
//     [email] => 555-1234
//     [phone] => johndoe@example.com
// )
