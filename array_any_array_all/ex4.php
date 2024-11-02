<?php

require_once 'vendor/autoload.php';

const ANIMALS = ['dog', 'cat', 'cow', 'duck', 'goose', 'elephant'];

// Check, if all animal names are longer than 5 letters.
$yesNo = array_all(fn ($name) => strlen($name) > 5, ANIMALS);

echo $yesNo ? 'Yes' : 'No';
