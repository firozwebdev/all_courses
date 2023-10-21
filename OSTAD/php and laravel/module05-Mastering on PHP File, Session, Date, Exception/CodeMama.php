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
