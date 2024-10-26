<?php


function getPerson()
{
    return [
        'name' => 'John Doe',
        'age' => 30,
        'email' => 'johndoe@example.com',
    ];
}

['name' => $name, 'age' => $age] = getPerson();
