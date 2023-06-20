<?php
echo "************************ E - 1 *************************" . "<br>";

// E - 1 
function removeOdd($array) {
  $newArray = [];
  foreach ($array as $number) {
    if ($number % 2 == 0) {
      $newArray[] = $number;
    }
  }
  return $newArray;
}

$array = [1, 2, 3, 4, 5, 6];
$newArray = removeOdd($array);
print_r($newArray);

echo "<br>";



echo "************************ E - 2 *************************" . "<br>";
// E - 2
function longestStringInArray($array, &$index) {
  $longestString = '';
  $StringIndex = 0;

  foreach ($array as $key => $value) {
    if (strlen($value) > strlen($longestString)) {
      $longestString = $value;
      $StringIndex = $key;
    }
  }

  $index = $StringIndex;
  return $longestString;
}

$array = ['apple', 'banana', 'cherry', 'grape'];
$index = 0;

$longestString = longestStringInArray($array, $index);

echo $longestString;
echo "<br>";
echo $index;
echo "<br>";


echo "************************ E - 3 *************************" . "<br>";
// E - 3
function multitwoArray($arr1 , $arr2){
    foreach($arr1 as $key=>$value1){
        foreach($arr2 as $key=>$value2){
        echo "$value1 * $value2 = ". ($value1*$value2)."<br>" ;
        }
    }

}
$arr1 = [2 , 4 , 5];
$arr2 = [1 , 3 , 4];
print_r(multitwoArray($arr1 , $arr2)) ;
echo "<br>";


echo "************************ E - 4 *************************" . "<br>";
// E - 4
function factorial($n) {
    if ($n < 0) {
      throw new Exception('The number must be non-negative.');
    } 
    if ($n == 0) {
      return 1;
    }
    
    return $n * factorial($n - 1);
  }
  
echo factorial(6);
echo "<br>";


echo "************************ E - 5 *************************" . "<br>";
// E - 5
function Prime($number) {
  if ($number < 2) {
    return false;
  }

  for ($i = 2; $i <= sqrt($number); $i++) {
    if ($number % $i == 0) {
      return "this number is not prime";
    }
  }

  return "this number is prime";
}

echo Prime(6);