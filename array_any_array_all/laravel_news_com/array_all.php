<?php

/**
 * Returns true if the given predicate is true for all elements.
 */
function arrayAll(callable $callback, array $items) {
    foreach ($items as $item) {
        if(!$callback($item)) {
            return false;
        }
    }
    return true;
}
