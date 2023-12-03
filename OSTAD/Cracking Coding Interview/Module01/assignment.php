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
echo "The factorial of $number is: $factorial";