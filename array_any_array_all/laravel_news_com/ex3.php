<?php

// Check, if all animal names are shorter than 12 letters.

require_once __DIR__ . '/array_all.php';
require_once __DIR__ . '/data.php';

function is_shoter_then_twelve(string $str) {
  return strlen($str) < 12;
}
