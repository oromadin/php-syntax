<?php
/**
 * Callable typehints are only supported in php >= 5.4.
 *
 * For PHP 5.3, remove callable typehint, use is_callable($callback) instead.
 */

/**
 * Returns true if the given predicate is true for all elements.
 */
function array_every(callable $callback, array $arr) {
  foreach ($arr as $element) {
    if (!$callback($element)) {
      return FALSE;
    }
  }
  return TRUE;
}

/**
 * Returns true if the given predicate is true for at least one element.
 */
function array_some(callable $callback, array $arr) {
  foreach ($arr as $element) {
    if ($callback($element)) {
      return TRUE;
    }
  }
  return FALSE;
}

/**
 * Farty face.
 */

/**
 * Example usage:
 */
$all_foo = array('foo', 'foo', 'foo');
$some_foo = array('foo', 'foo', 'bar');

function is_foo($stringy) {
  return $stringy == 'foo';
}

function is_bar($stringy) {
  return $stringy == 'bar';
}

echo "Every \$all_foo element is 'foo': ";
var_dump(array_every("is_foo", $all_foo));
echo "Some  \$all_foo element is 'foo': ";
var_dump(array_some("is_foo", $all_foo));
echo "\n";
echo "Every \$all_foo element is 'bar': ";
var_dump(array_every("is_bar", $all_foo));
echo "Some  \$all_foo element is 'bar': ";
var_dump(array_some("is_bar", $all_foo));
echo "\n";
echo "Every \$some_foo element is 'foo': ";
var_dump(array_every("is_foo", $some_foo));
echo "Some  \$some_foo element is 'foo': ";
var_dump(array_some("is_foo", $some_foo));
echo "\n";
echo "Every \$some_foo element is 'bar': ";
var_dump(array_every("is_bar", $some_foo));
echo "Some  \$some_foo element is 'bar': ";
var_dump(array_some("is_bar", $some_foo));