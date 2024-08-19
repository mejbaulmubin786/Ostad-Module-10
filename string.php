<?php
$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    // Count vowels
    $vowelCount = preg_match_all('/[aeiou]/i', $string);

    // Reverse the string
    $reversedString = strrev($string);

    // Print the result
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}
?>

