<?php

require_once 'lib/array_any.php';
$animals = include 'data/animals.php';

// Check, if any animal name is shorter than 3 letters.
return array_any(fn ($name) => strlen($name) < 3, $animals);
