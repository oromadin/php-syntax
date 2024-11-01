<?php

class SortBy
{
    private $sortKey;

    public function __construct(string $sortKey)
    {
        $this->sortKey = $sortKey;
    }

    public function __invoke(array $a, array $b)
    {
        return $a[$this->sortKey] <=> $b[$this->sortKey];
    }
}

$customers = [
    ['id' => 1, 'first_name' => 'John', 'last_name' => 'Do'],
    ['id' => 3, 'first_name' => 'Alice', 'last_name' => 'Gustav'],
    ['id' => 2, 'first_name' => 'Bob', 'last_name' => 'Filipe']
];

function sort_by(array $customers, callable $callback)
{
    usort($customers, $callback);
}
