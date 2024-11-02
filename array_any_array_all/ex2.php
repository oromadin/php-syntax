<?php

require_once 'vendor/autoload.php';

const ANIMALS = ['dog', 'cat', 'cow', 'duck', 'goose', 'elephant'];

// Check, if any animal name is shorter than 3 letters.
$yesNo = array_any(fn ($name) => strlen($name) < 3, ANIMALS);

echo $yesNo ? 'Yes' : 'No';
