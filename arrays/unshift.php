<?php

function kovrov_unshift(array &$array, mixed ...$values) : int
{
    $args = func_get_args();
   
    foreach ($args as $key => $arg) {
        if($key >= 1) {
            $array[] = $arg;
        }
    }

    foreach ($args[0] as $arg) {
        $array[] = $arg;
    }

    return count($array);
}

$x = [1, 2, 3, 4, 5];

echo kovrov_unshift($x, 2, 3);

echo '<pre>';
print_r($x);
echo '</pre>';
