<?php

class CallableClass
{
  public function __invoke($x)
  {
    var_dump($x);
  } 

  public function output($y)
  {
    var_dump($y);    
  }
}

$obj = new CallableClass();

$obj(5);
$obj->output(13);

var_dump(is_callable($obj));