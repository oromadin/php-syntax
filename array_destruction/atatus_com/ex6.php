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
    [
        'name' => 'Borland Vakulenko',
        'address' => [
            'street' => 'im. 26 Bakinskih komissarov',
            'city' => 'Oklahoma Springs',
            'state' => 'OA',
        ],
    ]
];

foreach ($people as ['address' => ['zip' => $zip]]) {
    echo "Zip code: $zip\n";
}

foreach ($people as $p) {
    $zip = $p['address']['zip'] ?? null;
    echo "Zip code: $zip\n";
}
