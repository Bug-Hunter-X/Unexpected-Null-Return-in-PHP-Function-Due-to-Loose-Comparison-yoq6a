function foo($a, $b) {
  if (!isset($a) || !isset($b)) {
    return null; // Handle cases where $a or $b is not set
  }
  if (is_numeric($a) && is_numeric($b)){
    return $a + $b; // Check if both are numbers before adding
  } else {
    return null; // Handle non-numeric inputs
  }
}

$result = foo(5, null);
var_dump($result); // Output: NULL

$result = foo(null, 5);
var_dump($result); // Output: NULL

$result = foo(5, 10);
var_dump($result); // Output: int(15)

$result = foo("hello", 10); //handles non-numeric inputs
var_dump($result); // Output: NULL