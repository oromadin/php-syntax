<?php

require_once 'vendor/autoload.php';

const ANIMALS = ['dog', 'cat', 'cow', 'duck', 'goose', 'elephant'];

// Check, if any animal name is longer than 5 letters.
$yesNo = array_any(fn ($name) => strlen($name) > 5, ANIMALS);

echo $yesNo ? 'Yes' : 'No';
