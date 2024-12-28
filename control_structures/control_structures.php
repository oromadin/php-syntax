<?php

echo (rand(1, 10) % 2 == 0) ? 'четное число<br>' : 'не четное число<br>';

define('CHARS', ['a', 'b', 'c', 'd']);
$char = CHARS[array_rand(CHARS)];

if ($char == 'a') : 
    echo 'a';
    $var = 'AAA';
elseif ($char == 'b') :
    echo 'b';
    $var = 'BBB';
elseif ($char == 'c') :
    echo 'c';
    $var = 'CCC';
else :
    echo 'i dont know';
endif;

echo '<br>' . $var;

$fst = rand(0, 1);
$snd = rand(0, 1);
if ($fst == 1 && $snd == 1) {
    echo "Оба значения равны единице: $fst и $snd";
} else {
    echo "Пока не получилось: $fst и $snd";
}

// ($content = file_get_contents('http://php.net')) || exit('Ошибка');
// echo $content;


if (false) {

} else {
    echo '<p>Отсутствует сетевой доступ<p>';
}

var_dump(isset($x));
var_dump(boolval(null));

// $x = isset($x) ?: 1;
// echo $x; // 1

$y = null;
$z = 'hello';
$x = $x ?? 1; // 1
$y = $y ?? 2; // 2
$z = $z ?? 'world'; // 'hello'

echo $x; // 1
echo $y; // 2
echo $z; // hello
echo '<br><br>';


$answer = 'yes';
switch($answer)
{
    case 'yes':
        echo 'Продолжаем работу!';
        break;
    case 'no':
        echo 'Завершаем работу';
        break;
    default:
        echo 'Некорректный ввод';
}

echo '<br><br>';

$number = 2;
switch($number)
{
    case 1:
        echo 'один ';
    case 2: case 3:
        echo 'три ';
    case 4: case 5:
        echo 'пять ';
    case 6: case 7:
        echo 'семь ';
    case 8: case 9:
        echo 'девять ';
        break;
    default:
        echo 'Это либо не число, либо число больше 9 или меньше 1';
}

echo '<br><br>';

$date = new DateTime();
echo $date->format('M');
switch($date->format('M'))
{
    case 'Jan':
    case 'Mar':
    case 'May':
    case 'Jul':
    case 'Aug':
    case 'Oct':
    case 'Dec':
    case 'Apr':
        $day = 31;
        break;
    case 'Jun':
    case 'Sep':
    case 'Nov':
        $day = 30;
        break;
    case 'Feb':
        $day = 28;
        break;
}
echo $day;

$answer = 'yes';
echo match ($answer) {
        'yes' => 'Продолжаем работу!<br>',
        'no' => 'Завершаем работу<br>'
    }; // Продолжаем работу!

    