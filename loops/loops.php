<?php

$var = 10;

while ($var <= 20) {
    echo "$var<br>";
    $var++;
}

echo 'end of while<br>';
echo 'decrement while:<br>';

$i = 5;
while (--$i) {
     echo "$i<br />";
}

echo 'decrement while:<br>';

$i = 5;
while ($i--) {
     echo "$i<br />";
}

echo 'decrement while:<br>';

$y = 5;

while ($y > 1) {
    --$y;;
    echo "$y<br>";
}

// loop in loop

echo 'Таблица умножения<br>';

$i = $j = 0;
var_dump($i, $j);
echo '<br>';

define('MAX_NUMBER', 10);
 
while ($i < MAX_NUMBER) {

    $j = 0;
    $i++;
    
    while ($j < MAX_NUMBER) {
        var_dump($i, $j);
        $j++;
        echo sprintf('%3d ', $i * $j);
    }
    echo '<br>';
}

echo '<br>break<br>';

// Условие выхода из цикла
$i = 0;

while (true) {
    $i++;
    if ($i > 5) break;
    echo "$i<br />";
}

// continue

echo 'continue:<br>';

$i = 0;

while (true) {
    $i++;
    // Досрочно прекращаем текущую итерацию
    if ($i < 4) continue;
    // Условие выхода из цикла
    if ($i > 5) break;
    echo "$i<br />";
}



// break nested 

echo 'break nested:<br>';

$i = $j = 0;

while (true) {
    while (true)
    {
        $i++;
        if ($i > 5) break;  
        echo "$i i<br>";
    }
    $i = 0;
    $j++;
    if ($j > 5) break;
}


$i = 0;
do {
    echo "$i<br />";
} while (++$i <= 5);


