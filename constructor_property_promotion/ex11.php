<?php

require_once __DIR__ . "/ex8.php";

class WithTrait
{
    use MyTrait;
}

$x = new WithTrait();
echo $x->str;
