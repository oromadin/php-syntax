<?php

$c = [
  'name' => 'John Doe',
  'email' => 'johndoe@example.com',
  'phone' => '555-1234',
];

[$c['email'], $c['phone']] = [$c['phone'], $c['email']];
