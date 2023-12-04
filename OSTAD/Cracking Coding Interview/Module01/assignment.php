<?php
/*
task 01
*/

function calculateFactorial($n){
    $result = 1;
    if($n < 0){
        echo "Error: Negative number not accepted ";
    }else if($n ==1 || $n == 0){
        return 1;
    }else{
        for($i=2;$i <= $n;$i++){
            $result *= $i;
        }
    }

    return $result;

}

$number = 20;
$factorial = calculateFactorial($number);
//echo "The factorial of $number is: $factorial";

//Remarks: Time complexity BigO(n) and space complexity BigO(1)

/*
 * Task 02 : A function to calculate the sum of all natural numbers between ‘a’ to  'b'.
 */
function calculateSum(int $a, int $b): int {
    // Ensure that $a is less than or equal to $b
    if ($a > $b) {
        // Swap $a and $b if $a is greater than $b
        [$a, $b] = [$b, $a];
    }

    // Calculate the sum using the formula for the sum of an arithmetic series
    $sum = ($b * ($b + 1) - $a * ($a - 1)) / 2;

    return $sum;
}

// Example usage:
$a = 1;
$b = 4;
echo "Example 1: Sum from $a to $b is " . calculateSum($a, $b) . PHP_EOL;

$a = 10;
$b = 6;
echo "Example 2: Sum from $a to $b is " . calculateSum($a, $b) . PHP_EOL;

//Remarks: Time complexity BigO(1) and space complexity BigO(1)