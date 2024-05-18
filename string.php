<?php

$strings = ["Hello", "World", "PHP", "Programming"];

function countVowel($string) {
  $vowelNumber = 0;
  $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
  
  // Vowels Count From String
  foreach (str_split($string) as $char) {
    if (in_array($char, $vowels)) {
      $vowelNumber++;
    }
  }
  
  // String Reverse 
  $stringRevers = strrev($string);
  
  // Result
  echo "Original String: $string, Vowel Count: $vowelNumber, Reversed String: $stringRevers\n";
}

foreach ($strings as $string) {
    countVowel($string);
}

?>