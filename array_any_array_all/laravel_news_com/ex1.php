<?php

// Check, if any animal name is longer than 5 letters.

require_once __DIR__ . '/array_any.php';
require_once __DIR__ . '/data.php';

function isLongerThenFive(string $str) {
  return strlen($str) > 5;
}

var_dump(arrayAny('isLongerThenFive', ITEMS));
