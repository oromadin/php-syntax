<?php

$c = 1;
$d = 2;
$a = 3 * sin ( $b = $c + 10) + $d;

echo $a . '<br>';

$a = 10 * 20;
$b = '' . (10 * 20);
echo "$a: " . gettype($a) . '<br>';
echo "$b: " . gettype($b) . '<br>';

$number = 216;
echo "Сегодня $number участников<br>";
echo "Сегодня {$number} участников<br>";

$str = 1;
$str .= 2;
$str .= 2;
var_dump($str);

echo '<br>' . '3.14' + 3.14 . '<br>';

echo 'Hello, world!<br>';
echo('Hello, world!<br>');

echo ('Сегодня '), $number, (' участников'), ('<br>');
echo 5 / 3 . '<br>';
echo (int)(5 / 3) . '<br>';
echo 5 % 3 . '<br>';
echo 6 % 3 . '<br>';
echo 9 ** 0.5 . '<br>';

// ----------------------------

// function increment($var, $prefix = false)
// {
//     if ($prefix) {
//         return $var + 1;
//         echo $var;
//     } else {
//         ech0 $var;
//     }
// }

// echo increment(10);

if (12 == '12') {
    echo 'the same<br>';
}

if (12 !== '12') {
    echo 'isnt the same<br>';
}

// приведение типов

echo 0 == '0';    // true
echo 0 == '0.0';  // true
echo 0.0 == '0';  // true
echo 0 == 'one';  // false
echo 42 == ' 42'; // true
echo 42 == '42b'; // false

echo 0 == '';     // false why?

// сраванение вещественных

// $var =  4 / 3 - 1;  // 0.33333333333333
// echo $var - 1 / 3;  // -5.5511151231258E-17
// echo $var == 1 / 3; // false


// strings compare

var_dump('abc' < 'd');
echo '<br>';

// array compare

$x = [1, 2, "3"];
$y = [1, 2, 3];
echo 'Равны ли два массива? ' . ($x == $y) . '<br>';

$x = [1, 2, true];
$y = [1, 2, 3];
echo 'Равны ли два массива? ' . ($x == $y) . '<br>';

$x = [1, 2, '67'];
$y = [1, 2, 3];
echo 'Равны ли два массива? ' . ($x != $y) . '<br>';

class Compare {}
class Compare2 {}

$x1 = new Compare();
$x2 = new Compare();
$x3 = new Compare2();

var_dump($x1 == $x2); // true
var_dump($x1 == $x3); // false

var_dump($x1 === $x2); // false
var_dump($x1 === $x3); // false


$yep  = ['реальность', true];
$nein = ['реальность', 'иллюзорна'];

$x = ['реальность', 'иллюзорна'];

if ($yep == $nein)  echo '<br>Два массива равны';
if ($yep === $nein) echo 'Два массива эквивалентны';

if ($x == $nein)  echo '<br>Два массива равны';
if ($x === $nein) echo 'Два массива эквивалентны<br>';


// Типы графических примитивов
define('LINE', 0);      // 000 00
define('CURVE', 1);     // 000 01
define('RECTANGLE', 2); // 000 10
define('ELLIPSE', 3);   // 000 11
// Цвет
define('BLACK', 0);     // 000 00
define('BLUE', 4);      // 001 00
define('GREEN', 8);     // 010 00
define('YELLOW', 12);   // 011 00
define('ORINGE', 16);   // 100 00
define('RED', 20);      // 101 00
define('WHITE', 24);    // 110 00

echo 'Зеленый прямоугольник в десятичном формате: ';
echo RECTANGLE | GREEN; // 10
echo '<br />';
echo 'Зеленый прямоугольник в двоичном формате: ';
echo decbin(RECTANGLE | GREEN) . '<br>'; // 1010

// Прямоугольник
define('RECTANGLE', 2); // 000000000 000000000 000000000 000 10
// Зеленый
define('GREEN', 8);     // 000000000 000000000 000000000 010 00
// Угол на 45 градусов
$angle = 45 << 5;       // 000000000 000000000 000101101 000 00
// Высота 15
$height = 15 << 14;     // 000000000 000011110 000000000 000 00
// Ширина 15
$width = 15 << 23;      // 000001111 000000000 000000000 000 00
// Результат
echo RECTANGLE | GREEN | $angle | $height | $width; // 126076330

echo '<br>Примитив: ' .  (126076330 & 3) . '<br />';
echo 'Цвет: ' .          ((126076330 & 28) >> 2) . '<br />';
echo 'Угол поворота: ' . ((126076330 & 16352) >> 5) . '<br />';
echo 'Высота: ' .        ((126076330 & 8372224) >> 14) . '<br />';
echo 'Ширина: ' .        ((126076330 & 4286578688) >> 23) . '<br />';
