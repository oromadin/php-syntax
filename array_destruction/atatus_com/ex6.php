<?php

// Extracting values from nested arrays

$people = [
    [
        'name' => 'John Doe',
        'address' => [
            'street' => '123 Main St',
            'city' => 'Anytown',
            'state' => 'CA',
            'zip' => '12345',
        ],
    ],
    [
        'name' => 'Jane Smith',
        'address' => [
            'street' => '456 Oak St',
            'city' => 'Othertown',
            'state' => 'NY',
            'zip' => '67890',
        ],
    ],
];

foreach ($people as ['address' => ['zip' => $zip]]) {
    echo "Zip code: $zip\n";
}

// Zip code: 12345
// Zip code: 67890
