<?php
echo "************************ E - 1 *************************" . "<br>";

// E - 1 
function checkChar($string) {

    $firstTwoCharacters = substr($string, 0, 2);
    $lastTwoCharacters = substr($string, -2);
  
    if ($firstTwoCharacters == $lastTwoCharacters) {
      return 'The first two and last two characters of the string are the same.';
    } else {
      return 'The first two and last two characters of the string are not the same.';
    }
  }

echo checkChar("efmmef");
echo "<br>";



echo "************************ E - 2 *************************" . "<br>";
// E - 2
function startWithGo($string) {
    $firstTwoCharacters = substr($string, 0, 2);
      if ($firstTwoCharacters == 'Go') {
      return 'The string starts with "Go".';
    } else {
      return 'The string does not start with "Go".';
    }
  }
echo startWithGo("Go To Home");
echo "<br>";



echo "************************ E - 3 *************************" . "<br>";
// E - 3
function checkNumber($number) {
    if ($number % 3 == 0 || $number % 7 == 0) {
      return 'The number is a multiple of 3 or 7';
    }
    return 'The number is not a multiple of 3 or 7.';
  }

echo checkNumber(21);
echo "<br>";



echo "************************ E - 4 *************************" . "<br>";
// E - 4
function findLargestNumber($number1, $number2, $number3) {
    $largestNumber = $number1;
    
    if ($number2 > $largestNumber) {
      $largestNumber = $number2;
    }
    if ($number3 > $largestNumber) {
      $largestNumber = $number3;
    }
    return $largestNumber;
  }
  $largestNumber = findLargestNumber(5, 6, 7);
  echo 'The largest number is ' . $largestNumber . '.';
  echo "<br>";



echo "************************ E - 5 *************************" . "<br>";
// E - 5
function findNearestNumberTo100($number1, $number2) {

    $difference1 = abs($number1 - 100);
    $difference2 = abs($number2 - 100);
  
    if ($difference1 < $difference2) {
      return $number1;
    } else {
      return $number2;
    }
  }
$nearestNumber = findNearestNumberTo100(25, 90);
echo 'The number nearest to 100 is ' . $nearestNumber . '.';
echo "<br>";



echo "************************ E - 6 *************************" . "<br>";
// E - 6
function largerValueInRange($value1, $value2) {
    if ($value1 >= 20 && $value1 <= 30 && $value2 >= 20 && $value2 <= 30) {
      if ($value1 > $value2) {
        return $value1;
      } else {
        return $value2;
      }
    } else {
      return 0;
    }
  }

$largerValue = largerValueInRange(25,20);
echo 'The larger value is ' . $largerValue . '.';
echo "<br>";



echo "************************ E - 7 *************************" . "<br>";
// E - 7
function countdigit($digit , $string) {
    $counts = 0;
    for ($i = 0; $i < strlen($string); $i++) {
      if ($string[$i] == $digit) {
        $counts++;
      }
    }
    return $counts;
  }

$counts = countDigit( 5 , "dg45h65h");
echo 'The number of occurrences of the digit in the string is ' . $counts . '.';
echo "<br>";



echo "************************ E - 8 *************************" . "<br>";
// E - 8
function sumOfDigits($number) {
    $sum = 0;
    while ($number != 0) {
    $digit = $number % 10;
    $sum += $digit;
    $number = $number / 10;
    }
    return 'The sum of the digits is :' . $sum;
  }

echo sumOfDigits(5554) . '.';
echo "<br>";



echo "************************ E - 9 *************************" . "<br>";
// E - 9
function reverseString($string) {
    $reversedString = '';
    for ($i = strlen($string) - 1; $i >= 0; $i--) {
      $reversedString .= $string[$i];
    }
    return $reversedString;
  }
echo 'The reversed string is ' . reverseString("Noura") . '.';