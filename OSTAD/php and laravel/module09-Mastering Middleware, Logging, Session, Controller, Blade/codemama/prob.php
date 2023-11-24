<?php
/*
 * Problem Statement
Write a program to create a function that returns an array of strings sorted by length in ascending order.

Input
The program will take an integer
�
N as the length of an array. Then it will take the string values of the array
�
[
]
M[].
 */


# Write your PHP code from here
function sortStringsByLength($strings)
{
    // Use a custom comparison function based on string length
    usort($strings, function ($a, $b) {
        return strlen($a) - strlen($b);
    });

    return $strings;
}

// Example usage

$line1 = trim(fgets(STDIN));
$line2 = trim(fgets(STDIN));
$line2 = explode(' ', $line2);
//$words = array("apple", "banana", "cherry", "date", "elderberry");
$sortedWords = sortStringsByLength($line2);

// Display the sorted array

echo implode(" ", $sortedWords) . "\n";



/*
 * Lexicographically At The End

 * Problem Statement
Write a program to create a function that returns the lexicographically first rearrangements of a lowercase string.

Input
The program will take a string
�
S as input.

Output
The output will print a string.
 */


# Write your PHP code from here
function lexicographicallyFirstRearrangement($inputString)
{
    // Convert the string to an array of characters
    $characters = str_split($inputString);

    // Sort the characters lexicographically
    sort($characters);

    // Convert the array back to a string
    $resultString = implode("", $characters);

    return $resultString;
}

// Example usage
$line1 = trim(fgets(STDIN));
$result = lexicographicallyFirstRearrangement($line1);

// Display the result

echo $result;

/*
 * Lexicographically At The End


Problem Statement
Write a program to create a function that returns the lexicographically last rearrangements of a lowercase string.

Input
The program will take a string
�
S as input.

Output
The output will print a string.
 */


# Write your PHP code from here
function lexicographicallyLastRearrangement($inputString)
{
    // Convert the string to an array of characters
    $characters = str_split($inputString);

    // Sort the characters in reverse order
    rsort($characters);

    // Convert the array back to a string
    $resultString = implode("", $characters);

    return $resultString;
}

// Example usage
$line1 = trim(fgets(STDIN));
$result = lexicographicallyLastRearrangement($line1);

// Display the result

echo $result;
