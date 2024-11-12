<?php

/*Simple defaults*/
class Short
{
    public function __construct(
        public string $name = 'Brent',
        public DateTimeImmutable $date = new DateTimeImmutable(), // newe ... are not allowed
    ) {
    }
}
