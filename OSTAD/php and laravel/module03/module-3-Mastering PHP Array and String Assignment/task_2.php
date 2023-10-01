<?php

/*
 * Create an array called $numbers containing the numbers 1 to 10. Write a PHP function which takes the "$numbers"
 * array as an argument to remove the even numbers from the array and print the resulting array.
 */


function removeEvenNumbers($numbers)
{
    // Use array_filter to remove even numbers
    $filteredNumbers = array_filter($numbers, function ($number) {
        return $number % 2 != 0; // Keep numbers that are not even
    });

    // Print the resulting array
    print_r($filteredNumbers);
}

// Create the numbers array
$numbers = range(1, 10); // Creates an array containing numbers from 1 to 10

// Call the function to remove even numbers and print the resulting array
removeEvenNumbers($numbers);

