<?php

// Check, if all animal names are shorter than 12 letters.
return array_all(fn ($name) => strlen($name) < 12, ANIMALS);
