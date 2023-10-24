<?php
/*
 * Problem Statement
Write a program to create a function that takes two arguments. Both arguments are integers,
a and b. Return true if one of them is 10 or if their sum is 10.

Input
The input consists of two integers.

Output
The output will print "True" if one of the input is 10 or their sum is 10. Otherwise,
it will print "False".
 */

function checkNumbers($a, $b) {
    return ($a == 10 || $b == 10 || $a + $b == 10);
}

// Example usage
$a = 1;
$b = 10;
if (checkNumbers($a, $b)) {
    echo "True";
} else {
    echo "False";
}

/*
 * fscanf(STDIN,"%s %s",$firstName,$lastName); //taking input from console or terminal or cmd

    echo $lastName.', '.$firstName;

 */

/*
 * Write a program which will take seconds as input and output into hour:minute.
 */
$seconds = fgets(STDIN);

$hours = floor($seconds / 3600); // 1 hour = 3600 seconds
$minutes = floor(($seconds % 3600) / 60); // 1 minute = 60 seconds

print sprintf("%02d:%02d", $hours, $minutes);