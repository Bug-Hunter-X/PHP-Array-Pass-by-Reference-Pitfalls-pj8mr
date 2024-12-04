```php
function processArray(array &$arr) {
  foreach ($arr as &$value) {
    $value = $value * 2; 
  }
}

$numbers = [1, 2, 3, 4, 5];
processArray($numbers);
print_r($numbers); // Output: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )

$moreNumbers = [10,20,30,40,50];
processArray($moreNumbers);
print_r($moreNumbers); //Output: Array ( [0] => 20 [1] => 40 [2] => 60 [3] => 80 [4] => 100 )

function anotherProcess(array $arr){
  foreach ($arr as $key => $value){
    $arr[$key] = $value * 2;
  }
}

$test = [1,2,3,4,5];
anotherProcess($test);
print_r($test); // Output: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )

```