<?php
/*
 * Find Discount

Problem Statement
Write a program to create a function that takes two arguments: the original price and the discount
percentage as integers and returns the final price after the discount.

Input
The input consists of two integers: the original price and the discount.

Output
The output will print the final price after discount which will be a float number.
 */


function calculateFinalPrice($originalPrice, $discountPercentage)
{
    // Calculate the discounted amount
    $discountAmount = $originalPrice * ($discountPercentage / 100);

    // Calculate the final price after discount
    $finalPrice = $originalPrice - $discountAmount;

    return $finalPrice;
}

// Example usage
$input = fgets(STDIN);
$input = explode(" ", $input);

$originalPrice = $input[0];
$discountPercentage = $input[1];
// Original price as an integer
//$discountPercentage = fgets(STDIN);
//echo $discountPercentage; // Discount percentage as an integer

// Calculate and output the final price after discount
$finalPrice = calculateFinalPrice($originalPrice, $discountPercentage);
$output = sprintf("Price: %.2f", $finalPrice);
echo $output;

/*
 *Build Toy Cars

Problem Statement
Suppose, you work in a toy car workshop, and your job is to build toy cars from a collection of parts. Each toy car needs 4 wheels, 1 car body, and 2 figures of people to be placed inside. Write a program which will calculate how many complete toy cars can be made, given the total number of wheels, car bodies and figures available.

Input
The input consists of three integers: number of wheels, car bodies, figures.

Output
The output will print the number of cars.
 */



 function calculateToyCars($wheels, $carBodies, $figures)
{
    // Calculate the maximum number of cars that can be built
    $maxCars = min($wheels / 4, $carBodies, $figures / 2);
    return $maxCars;
}

$input = fgets(STDIN);
$input = explode(" ", $input);

$wheels = $input[0];
$carBodies = $input[1];
$figures = $input[2];


$numberOfCars = calculateToyCars($wheels, $carBodies, $figures);
echo floor($numberOfCars);




