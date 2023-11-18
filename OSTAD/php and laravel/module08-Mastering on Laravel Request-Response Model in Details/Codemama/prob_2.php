<?php

/*
 * Problem Statement
Write a program to find the index of a target value in a rotated sorted array using binary search algorithm.
 If a sorted array is like {0,1,2,4,5,6,7} then the rotated sorted array can be {4,5,6,7,0,1,2}.
 */


# Write your PHP code from here
function search($arr, $target) {
    $low = 0;
    $high = count($arr) - 1;

    while ($low <= $high) {
        $mid = (int)(($low + $high) / 2);

        if ($arr[$mid] == $target) {
            return $mid;
        }

        // Check which half is sorted
        if ($arr[$low] <= $arr[$mid]) {
            // Left half is sorted
            if ($arr[$low] <= $target && $target < $arr[$mid]) {
                $high = $mid - 1; // Target is in the left half
            } else {
                $low = $mid + 1; // Target is in the right half
            }
        } else {
            // Right half is sorted
            if ($arr[$mid] < $target && $target <= $arr[$high]) {
                $low = $mid + 1; // Target is in the right half
            } else {
                $high = $mid - 1; // Target is in the left half
            }
        }
    }

    return -1; // Target not found
}
$line1 = trim(fgets(STDIN));
$line2 = trim(fgets(STDIN));
$line3 = trim(fgets(STDIN));

// Example rotated sorted array
$rotatedArray= explode(' ',$line2);


$index = search($rotatedArray, $line3);

if ($index != -1) {
    echo  $index;
} else {
    echo "Element not found";
}