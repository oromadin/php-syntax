<?php

class User
{
    public function __construct(public string $username)
    {}
}

$users = [
    new User('user 1'),
    new User('user 2'),
    new User('user 3'),
];

echo "<pre>";
print_r(array_column($users, 'username'));
echo "</pre>";
