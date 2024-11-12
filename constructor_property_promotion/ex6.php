<?php

/*Combining promoted- and normal properties*/

class MyClass
{  
  public string $b;

  public function __construct(public string $a, string $b)
  {
    $this->b = $b;
  }
}
