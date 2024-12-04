```php
function processArray(array $arr) {
  $newArray = [];
  foreach ($arr as $value) {
    $newArray[] = $value * 2; 
  }
  return $newArray;
}

$numbers = [1, 2, 3, 4, 5];
$processedNumbers = processArray($numbers);
print_r($numbers); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
print_r($processedNumbers); // Output: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )

```