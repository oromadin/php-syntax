<?php

class X
{
    private $z;

    public function __construct($z)
    {
        $this->z = $z;
    }

    public function __invoke($a)
    {
        return $this->z + $a;
    }
}

$x = new X(100);

$x(20);
