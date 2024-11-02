<?php

/**
 * Returns true if the given predicate is true for at least one element.
 */
function array_any(callable $callback, array $items)
{
    foreach ($items as $item) {
        if ($callback($item)) {
            return true;
        }
    }
    return false;
}
