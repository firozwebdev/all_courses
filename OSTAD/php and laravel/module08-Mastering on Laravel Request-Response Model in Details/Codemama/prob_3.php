<?php
/*
 * Problem Statement
 Write a program to approximate the square root of a non-negative integer using binary search.
 Your function should return an integer representing the floor of the square root.
 For example, for 6 it will print 2.
 */


function sqrtApproximation($num) {
    if ($num < 2) {
        return $num;
    }

    $low = 0;
    $high = $num;

    while ($low <= $high) {
        $mid = (int)(($low + $high) / 2);
        $square = $mid * $mid;

        if ($square == $num) {
            return $mid; // Perfect square found
        } elseif ($square < $num) {
            $low = $mid + 1;
        } else {
            $high = $mid - 1;
        }
    }

    return $high; // Return the floor of the square root
}

// Example usage
$number = trim(fgets(STDIN));

$result = sqrtApproximation($number);

echo  $result;
