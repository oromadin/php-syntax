<?php

// Check, if all animal names are longer than 5 letters.

require_once __DIR__ . '/array_all.php';
require_once __DIR__ . '/data.php';

function isLongerThenFive(string $str) {
  return strlen($str) > 5;
}

var_dump(arrayAll('isLongerThenFive', ITEMS));
