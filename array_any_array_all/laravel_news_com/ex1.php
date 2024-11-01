<?php

class ArrayTests {
    
    public const ITEMS = [
        'a' => 'dog',
        'b' => 'cat',
        'c' => 'cow',
        'd' => 'duck',
        'e' => 'goose',
        'f' => 'elephant'
    ];

    public function arrayAny() {
        $flag = false;
        
        foreach (self::ITEMS as $item) {
            if (strlen($item) > 5) {
                $flag = true;
            }
        }
        return $flag;
    }

    public function arrayAll() {
        $flag = true;

        foreach (self::ITEMS as $item) {
            if (!(strlen($item) > 5)) {
                $flag = false;
           }
        }
        return $flag;
     }
}

$example = new ArrayTests();
var_dump($example->arrayAny());
var_dump($example->arrayAll());

// Check, if any animal name is longer than 5 letters.
// array_any($array, function (string $value) {
//     return strlen($value) > 5;
// }); // bool(true)
 
// // Check, if any animal name is shorter than 3 letters.
// array_any($array, function (string $value) {
//     return strlen($value) < 3;
// }); // bool(false)
 
// // Check, if all animal names are shorter than 12 letters.
// array_all($array, function (string $value) {
//     return strlen($value) < 12;
// }); // bool(true)
 
// // Check, if all animal names are longer than 5 letters.
// array_all($array, function (string $value) {
//     return strlen($value) > 5;
// }); // bool(false)