<?php

class Sort
{
    private $key;

    public function __construct(string $key)
    {
        $this->key = $key;
    }

    public function __invoke(array $a, array $b): int
    {
        return $a[$this->key] <=> $b[$this->key];
    }

    public function output() {
        
    }
    
}

$customers = [
    ['id' => 1, 'first_name' => 'John', 'last_name' => 'Do'],
    ['id' => 3, 'first_name' => 'Alice', 'last_name' => 'Gustav'],
    ['id' => 2, 'first_name' => 'Bob', 'last_name' => 'Filipe']
];

echo ' Сортировка клиентов по имени';
usort($customers, new Sort('first_name'));
echo '<pre>';
print_r($customers);
echo '</pre>';

echo 'Сортировка клиентов по фамилии';
usort($customers, new Sort('last_name'));
echo '<pre>';
print_r($customers);
echo '</pre>';