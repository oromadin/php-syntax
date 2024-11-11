<?php

/*Access promoted properties from the constructor body*/

class Short
{
  public function __construct(public int $a, public int $b)
  {
    assert($this->a >= 100);

    if ($b >= 0) {
        throw new InvalidArgumentException('…');
    }
  }
}
