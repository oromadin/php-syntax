<?php

/*Variadic parameters cannot be promoted*/

class Short
{
    public function __construct(public string ...$a)
    {
    }
}
