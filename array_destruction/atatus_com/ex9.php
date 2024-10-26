<?php

// Extracting values from objects

class Person
{
    public string $name;
    public int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

$person = new Person('John Doe', 30);

['name' => $name, 'age' => $age] = (array) $person;

echo "Name: $name\n";
echo "Age: $age\n";
