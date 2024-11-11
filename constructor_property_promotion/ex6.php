<?php

/*Combining promoted- and normal properties*/

require_once __DIR__ . "ex8.php"

class MyClass
{  
  use MyTrait;
  
  public string $b;

  public function __construct(public string $a, string $b)
  {
    $this->b = $b;
  }
}

echo $this->str;
