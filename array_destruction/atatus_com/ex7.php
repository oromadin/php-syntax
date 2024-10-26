<?php

// Extracting values from function returns

function getPerson()
{
    return [
        'name' => 'John Doe',
        'age' => 30,
        'email' => 'johndoe@example.com',
    ];
}

['name' => $name, 'age' => $age] = getPerson();

echo "Name: $name\n";
echo "Age: $age\n";
