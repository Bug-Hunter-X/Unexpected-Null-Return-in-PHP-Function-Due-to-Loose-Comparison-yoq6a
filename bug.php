function foo($a, $b) {
  if ($a === null || $b === null) {
    return null; //This will return null if either $a or $b is null.
  }
  return $a + $b;
}

$result = foo(5, null);
var_dump($result); // Output: NULL

$result = foo(null, 5);
var_dump($result); // Output: NULL

$result = foo(5, 10);
var_dump($result); // Output: int(15)