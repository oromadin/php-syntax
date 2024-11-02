<?php

// Check, if any animal name is longer than 5 letters.

return array_any(fn(string $name) => strlen($name) > 5, ANIMALS);
