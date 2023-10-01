<?php

/*
 * Create an array called $grades with the following values: 85, 92, 78, 88, 95. Write a PHP function
 * which takes "$grades" as an argument to sort the array in descending order and print the sorted grades as array.
 */

function sortGradesDescending($grades)
{
    // Sort the array in descending order
    rsort($grades);

    // Print the sorted grades as an array
    print_r($grades);
}

// Create the grades array
$grades = array(85, 92, 78, 88, 95);

// Call the function to sort and print the grades
sortGradesDescending($grades);

