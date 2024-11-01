<?php

class ArrayAny {
  
  public const ITEMS = [
      'a' => 'dog',
      'b' => 'cat',
      'c' => 'cow',
      'd' => 'duck',
      'e' => 'goose',
      'f' => 'elephant'
  ];

  public function arrayAny() {
      $flag = false;

      foreach (self::ITEMS as $item) {
          if (strlen($item) > 5) {
              $flag = true;
          }
      }
      return $flag;
  }
}

$example = new ArrayAny();
var_dump($example->arrayAny());