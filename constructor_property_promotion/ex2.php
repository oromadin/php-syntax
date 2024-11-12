<?php

/*How it works*/

// Default propery value set on the method argument, not on class propery
class ShortSyntax
{
    public function __construct(public string $name = 'Brent')
    {
    }
}

// At first transform to normal syntax, then execute
class NormalSyntax
{
    public string $name;

    public function __construct(string $name = 'Brent')
    {
        $this->name = $name;
    }
}
