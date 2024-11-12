<?php

require_once __DIR__ . "ex8.php";
  
class MyTrait
{
  use MyTrait;

  public function X()
  {
    echo $this->str;
  }
  
}
