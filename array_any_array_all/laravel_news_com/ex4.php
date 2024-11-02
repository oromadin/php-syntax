<?php

// Check, if all animal names are longer than 5 letters.
return array_all(fn($name) => strlen($name) > 5, ANIMALS);
