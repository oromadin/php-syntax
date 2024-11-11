<?php

class WasLongSyntax
{
  public string $name;
  public string $email;
  public DateTimeImmutable $birth_date;

  public function __construct(
    string $name, 
    string $email, 
    DateTimeImmutable $birth_date
  )
  {
    $this->name = $name;
    $this->email = $email;
    $this->birth_date = $birth_date;
  }
}

class BecameShortSyntax
{
  public function __construct(
      public string $name, 
      public string $email, 
      public DateTimeImmutable $birth_date,
  )
  {
  }
}
