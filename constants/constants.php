<?php

echo 'Глава 7. Константы' . '<br><br>';

echo 'File path: ' . __FILE__ . '<br>';
echo 'Current line: ' . __LINE__ . '<br>';
echo 'Current PHP version: ' . PHP_VERSION . '<br>';
echo 'Current OS: ' . PHP_OS . '<br>';
echo 'Current directory: ' . __DIR__ . '<br>';

echo 'Low register const: true = ' . true . '<br>';
echo 'Low register const: false = ' . false . '<br>';
echo 'Low register const: null = ' . null . '<br>';

function foo()
{
    echo 'Current function name: ' . __FUNCTION__ . '<br>';
}

foo();

class A
{     
    const CLASS_CONST = 'Im a class const';
    public $className = __CLASS__;
    
    public static function className()
    {
        echo 'Current class name (static): ' . __CLASS__ . '<br>';
    }

    public function className2()
    {
        echo 'Current class name (instance->property): ' . $this->className . '<br>';
    }

    public function className3()
    {
        echo 'Current class name (instance): ' . __CLASS__ . '<br>';
    }

    public function checkConst()
    {   
        $item1 = defined(self::CLASS_CONST) ? 'defined' : 'not defined';
        $item2 = defined('self::CLASS_CONST') ? 'defined' : 'not defined';
        
        return [$item1, $item2];
    }
}

echo A::className();

$a = new A();
$a->className2();
$a->className3();

echo '<pre>';
print_r($a->checkConst());
echo '</pre>';

echo A::CLASS_CONST;

define('MY_CONSTANT', 1);
$consts = get_defined_constants(true);

echo '<pre>';
print_r($consts['user']['MY_CONSTANT']);
echo '</pre>';

if (defined('MY_CONSTANT')) {
    echo 'const defined<br>' ;
}

$index = rand(1, 10);
$name = "Id_{$index}";

define($name, 'random const name');
echo constant($name);
