<?php
function findTriplet($arr, $targetSum) {
    sort($arr);

    for ($i = 0; $i < count($arr) - 1; $i++) {
        $left = $i + 1;
        $right = count($arr) - 1;

        while ($left <= $right) {
            $currentSum = $arr[$i] + $arr[$left] + $arr[$right];

            if ($currentSum == $targetSum) {
                return $arr[$i] . ' ' . $arr[$left] . ' ' . $arr[$right];
            } elseif ($currentSum < $targetSum) {
                $left++;
            } else {
                $right--;
            }
        }
    }

    return "No triplet found";
}

// Input reading
$input1 = trim(fgets(STDIN)); // Trim newline character
$input2 = trim(fgets(STDIN));
$arr = array_map('intval', explode(' ', $input2));
$targetSum = intval(fgets(STDIN));

// Output
$output = findTriplet($arr, $targetSum);
echo $output;
