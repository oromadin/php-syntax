<?php

class A
{
  public function __construct(public $a)
  {
  }
}

class B extends A
{
  public function __construct($a, public $b)
  {
    parent::__construct($a);
  }
}