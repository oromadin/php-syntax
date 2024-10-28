<?php

class X
{
    public function __invoke($a)
    {
        return $a + 1;
    }
}

$x = new X();
