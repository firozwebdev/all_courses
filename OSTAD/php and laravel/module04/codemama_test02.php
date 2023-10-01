<?php
/*
 * Write a program that removes duplicate characters
 *  from a given string, keeping only the first
 * occurrence of each character in php
 */


function removeDuplicates($inputString)
{
    $outputString = '';
    $charCount = array();

    for ($i = 0; $i < strlen($inputString); $i++) {
        $char = $inputString[$i];
        if (!isset($charCount[$char])) {
            $outputString .= $char;
            $charCount[$char] = 1;
        }
    }

    return $outputString;
}

// Example usage
$inputString = "egg";
$result = removeDuplicates($inputString);
echo "Original String: " . $inputString . "\n";
echo "String after removing duplicates: " . $result;

