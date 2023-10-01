<?php

// 1. Create a PHP script using a loop to print all even numbers between 1 and 10.
for ($i = 2; $i <= 10; $i += 2) {
    echo $i . " ";
}

// 2.Declare a function named 'greet' that takes one parameter, 'name'. The function should print a greeting message with the name passed to it when it is called.

echo '<br>';

function greet($name){
    echo "Welcome $name";
}

greet("Sabuz");

// 3. Create a recursive function called 'factorial' in PHP that calculates and returns the factorial of a number.

echo "<br>";


function factorial($n)
{
    if ($n <= 1) {
        return 1; // Base case: factorial of 0 and 1 is 1
    } else {
        // Recursive case: n! = n * (n-1)!
        return $n * factorial($n - 1);
    }
}

// Test the factorial function
$number = 5; // Change this to the number you want to calculate the factorial for
$result = factorial($number);
echo "The factorial of $number is :  $result";


// 4. Write a PHP function named 'fibonacci' that prints the Fibonacci series up to 10 numbers.
echo '<br>';


function fibonacci($count)
{
    $first = 0;
    $second = 1;

    for ($i = 1; $i <= $count; $i++) {
        // Print the current Fibonacci number
        echo $first;

        // Add a comma and space if it's not the last number
        if ($i < $count) {
            echo ", ";
        }

        // Calculate the next Fibonacci number
        $next = $first + $second;

        // Update variables for the next iteration
        $first = $second;
        $second = $next;
    }
}

// Call the 'fibonacci' function to print the Fibonacci series up to 10 numbers
fibonacci(10);

