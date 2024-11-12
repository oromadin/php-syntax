<?php

/*Ternary operator*/

$marks = 100;

if ($marks >= 50) {
    $rank = 'pass';
}
else {
    $rank = 'fail';
}

echo $rank;

$rank = $marks >= 50 ? 'pass' : 'fail';

echo $rank;
