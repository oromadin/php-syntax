<?php

// array_slice

$a = [1, 2, 3, 4, 5, 6, 7];

echo '<pre>';
print_r(array_slice($a, 2, 3));
echo '</pre>';

echo '<pre>';
print_r(array_slice($a, 2, 3, true));
echo '</pre>';

echo '<pre>';
print_r(array_slice($a, -3, count($a), true));
echo '</pre>';

echo '<pre>';
print_r(array_slice($a, -3, true));
echo '</pre>';

echo '<pre>';
print_r(array_slice($a, -3, count($a), true));
echo '</pre>';

echo '<pre>';
print_r(array_slice($a, -5, -2));
echo '</pre>';

// array_splice

$arr = ['красный', 'зеленый', 'синий', 'желтый'];
echo '<pre>';
print_r($arr);
echo '</pre>';

echo '<pre>';
echo '<pre>';
print_r(array_splice($arr, 2));
echo '</pre>';
print_r($arr);

$arr = ['красный', 'зеленый', 'синий', 'желтый'];
array_splice($arr, 1, -1); // ['красный', 'желтый']
print_r($arr);

$arr = ['красный', 'зеленый', 'синий', 'желтый', 'kjhsdfkj', 'sdfkjhskjfh'];
print_r(array_splice($arr, 1, 3, [1,2,2,2,2,'оранжевый', 1111]));
print_r($arr);
echo '</pre>';


$input = array("red", "green", "blue", "yellow");
$x = 1;
$y = 2;

echo '<pre>';
print_r($input);
echo '</pre>';

// Добавить два элемента в массив $input
array_push($input, $x, $y);

echo '<pre>';
print_r($input);
echo '</pre>';

array_splice($input, count($input), 0, [$x, $y]);

echo '<pre>';
print_r($input);
echo '</pre>';

// Удалить последний элемент из массива $input
array_pop($input);
array_splice($input, -1);

echo '<pre>';
print_r($input);
echo '</pre>';


// Удалить первый элемент из массива $input
array_shift($input);
array_splice($input, 0, 1);

echo '<pre>';
print_r($input);
echo '</pre>';

// Добавить элемент в начало массива $input
array_unshift($input, $x, $y);
array_splice($input, 0, 0, array($x, $y));

echo '<pre>';
print_r($input);
echo '</pre>';


// Заменить в массиве $input элемент с индексом $x на значение $y
$input[$x] = $y; // Для массивов, в которых ключ равен смещению
array_splice($input, $x, 1, $y);

echo '<pre>';
print_r($input);
echo '</pre>';
