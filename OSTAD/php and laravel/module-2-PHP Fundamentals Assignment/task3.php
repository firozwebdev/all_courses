<?php
/*
 * Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
   Fibonacci number is greater than 100, break out of the loop using the break statement.
 */

$first = 0;
$second = 1;
$count = 0;

while ($count < 10) {
    // Calculate the next Fibonacci number
    $next = $first + $second;

    // Check if the next Fibonacci number is greater than 100
    if ($next > 100) {
        break; // Break out of the loop
    }

    // Print the Fibonacci number
    echo $next . " ";

    // Update variables for the next iteration
    $first = $second;
    $second = $next;

    $count++;
}

