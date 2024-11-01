<?php

class ArrayAll {

  public const ITEMS = [
      'a' => 'dog',
      'b' => 'cat',
      'c' => 'cow',
      'd' => 'duck',
      'e' => 'goose',
      'f' => 'elephant'
  ];

  public function arrayAll() {
      $flag = true;

      foreach (self::ITEMS as $item) {
          if (!(strlen($item) > 5)) {
              $flag = false;
          }
      }
      return $flag;
  }
}

$example = new ArrayAll();
var_dump($example->arrayAll());