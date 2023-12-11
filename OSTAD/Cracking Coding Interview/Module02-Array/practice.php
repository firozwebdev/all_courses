<?php
function test ($arr, $B){
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

test([2,4,5,6,1,2,3],4);