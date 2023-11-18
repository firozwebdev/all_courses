<?php

/*
 * Problem Statement
Write a program to find the minimum value in a rotated sorted array using binary search algorithm.
If a sorted array is like {0,1,2,4,5,6,7} then the rotated sorted array can be {4,5,6,7,0,1,2}.

Input
The program will take an integer
�
N as the size of a rotated sorted array. Then it will take the integer values of the array
�
[
]
M[].

Output
 */
# Write your PHP code from here
function findMin($arr) {
    $low = 0;
    $high = count($arr) - 1;

    while ($low < $high) {
        $mid = (int)(($low + $high) / 2);

        if ($arr[$mid] > $arr[$high]) {
            // The minimum value must be in the right half
            $low = $mid + 1;
        } else {
            // The minimum value must be in the left half or at mid
            $high = $mid;
        }
    }

    return $arr[$low];
}

$line1 = trim(fgets(STDIN));
$line2 = trim(fgets(STDIN));
$rotatedArray= explode(' ',$line2);
//print_r($rotatedArray);

$sortedArray = [0, 1, 2, 4, 5, 6, 7];

//$minValueSorted = findMin($sortedArray);
$minValueRotated = findMin($rotatedArray);

echo $minValueRotated;

?>