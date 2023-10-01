<?php
/*
 * Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a
    step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function
    should take the arguments like start as 1, end as 20 and step as 2. You must call the
    function to print.
    Also do the same using while loop and do-while loop also.
 */
//using for loop
function printEvenNumbersUsingForLoop($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " ";
    }
}

// Call the function
printEvenNumbersUsingForLoop(2, 20, 2);

echo '<br>';
// Using while loop
function printEvenNumbersUsingWhileLoop($start, $end, $step) {
    while ($start <= $end) {
        echo $start . " ";
        $start += $step;
    }
}

// Call the function
printEvenNumbersUsingWhileLoop(2, 20, 2);

echo '<br>';
// Using do-while loop
function printEvenNumbersUsingDoWhileLoop($start, $end, $step) {
    do {
        echo $start . " ";
        $start += $step;
    } while ($start <= $end);
}

// Call the function
printEvenNumbersUsingDoWhileLoop(2, 20, 2);