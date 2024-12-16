<?php

class Person
{
    public function __construct(private string $name)
    {
    }

    public function __get($prop)
    {
        return $this->$prop;
    }

    public function __isset($prop) : bool
    {
        return isset($this->$prop);
    }
}

$people = [
    new Person('Fred'),
    new Person('Jane'),
    new Person('John'),
];

echo "<pre>";
print_r(array_column($people, 'name'));
echo "</pre>";

echo "<pre>";
print_r(array_column($people, null));
echo "</pre>";
