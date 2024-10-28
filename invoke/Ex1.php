<?php

class X
{
    public function __invoke()
    {
        return 10;
    }
}

$x = new X();
