<?php

$a = ['one' => 1, 'two' => 2, 'Two' => 2, 'two' => 4];

$b['a'] = 'a';
$b['b'] = 'b';

$ships = [
    'Пассажирские корабли' => ['Лайнер', 'Яхта', 'Паром'],
    'Военные корабли' => ['Авианосец', 'Линкор', 'Эсминец'],
    'Грузовые корабли' => ['Сормовский', 'Волго-Дон', 'Окский']
];

$c[4] = 10;

echo "we have $c[4] seconds<br>";
echo "we have $a[one] second<br>";
echo "we have {$a['one']} second";

$arr[0][0] = 14;
echo '<pre>';
print_r($arr);
echo '</pre>';

echo 'we have ' . $arr[0][0] . ' seconds<br>';
echo "we have {$arr[0][0]} seconds";

// ------------------------

echo '<pre>';
print_r($a);
echo '</pre>';

echo '<pre>';
print_r($b);
echo '</pre>';

echo '<pre>';
print_r($ships);
echo '</pre>';