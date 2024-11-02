<?php

// Check, if any animal name is shorter than 3 letters.

require_once __DIR__ . '/array_any.php';
require_once __DIR__ . '/data.php';

function is_shoter_then_three(string $str) {
  return strlen($str) < 3;
}
