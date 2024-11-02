<?php

require_once 'vendor/autoload.php';

const ANIMALS = ['dog', 'cat', 'cow', 'duck', 'goose', 'elephant'];

// Check, if all animal names are shorter than 12 letters.
$yesNo = array_all(fn ($name) => strlen($name) < 12, ANIMALS);

echo $yesNo ? 'Yes' : 'No';
