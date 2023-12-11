<?php

/*
 * finding maximum sum by taking b size element from an array
 */
function test_sum ($arr, $B){
    $max_sum = 0;
    $current_sum = 0;
    for($i = 0; $i<$B;$i++){ //sum for first b size element in array
        $current_sum +=$arr[$i];
    }

    $max_sum = $current_sum;
    for($i=$B-1; $i>=0; $i--){
        for($j=count($arr)-1; $j--;){
            $current_sum = $current_sum -$arr[$i] + $arr[$j];
            $max_sum = max($max_sum,$current_sum);
        }

    }

    echo $max_sum;


}

//test([4,7,3],2);

/*
 * finding maximum product by taking b size element from an array
 */

function test_product($arr, $b){
    sort($arr);
    $n = count($arr);
    $m1 = $arr[$n-1]*$arr[$n-2]*$arr[$n-3];
    $m2 = $arr[0] * $arr[1] * $arr[$n-2];
    $max_product =  max($m1,$m2);

    echo $max_product;
}

test_product([2,7,4,2],3);

