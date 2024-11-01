<?php

class X
{
    public function __invoke($name)
    {
        return $this->prefix() . $name . $this->suffix();
    }

    private function prefix()
    {
        return 'Dear ';
    }

    private function suffix()
    {
        return ' !';
    }
}

$x = new X();

echo $x('Vakulenko');
