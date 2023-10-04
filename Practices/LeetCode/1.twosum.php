<?php
/*
 * Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.

You may assume that each input would have exactly one solution, and you may not use the same element twice.

You can return the answer in any order.

Example 1:

Input: nums = [2,7,11,15], target = 9
Output: [0,1]
Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].
Example 2:

Input: nums = [3,2,4], target = 6
Output: [1,2]
Example 3:

Input: nums = [3,3], target = 6
Output: [0,1]


Constraints:

2 <= nums.length <= 104
-109 <= nums[i] <= 109
-109 <= target <= 109
 */


 function twoSum($nums, $target) {
    $numIndices = array();
    foreach ($nums as $index => $num) {
        echo "Index is :{$index} value is: {$num} \n"; //checking code
        $complement = $target - $num; // 9-2=7
        echo "Completement is : {$complement} \n";

        if (isset($numIndices[$complement])) {  //$numIndices[7]
            echo  "38th no. line is: {$numIndices[$complement]} - {$index}  \n"; //checking code
            return [$numIndices[$complement], $index];
        }
        $numIndices[$num] = $index;
        echo "1. { $numIndices[$num]} \n"; //checking code
    }
    return null; // No solution found
}
$nums = [2,7,11,15];

$target = 9;
print_r(twoSum($nums,$target));