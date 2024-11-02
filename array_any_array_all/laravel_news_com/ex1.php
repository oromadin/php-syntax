<?php

// Check, if any animal name is longer than 5 letters.
return array_any(fn ($name) => strlen($name) > 5, ANIMALS);
