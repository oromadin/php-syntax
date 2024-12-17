<?php

require_once 'ex1.php';

$first_names = array_column($records, null, 'id');
echo "<pre>";
print_r($first_names);
echo "</pre>";

$last_names = array_column($records, 'last_name', 'first_name');
echo "<pre>";
print_r($last_names);
echo "</pre>";
