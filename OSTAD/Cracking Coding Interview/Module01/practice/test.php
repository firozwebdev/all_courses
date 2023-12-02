<?php
function sum_of_min_max($arr){
    $max_n = $arr[0];
    $min_n = $arr[0];

    for($i=0;$i<count($arr); $i++){
        if($arr[$i] > $max_n){
            $max_n = $arr[$i];
        }elseif ($arr[$i]<$min_n){
            $min_n = $arr[$i];
        }
    }

    echo $max_n + $min_n;
}

sum_of_min_max([2,4,56,12]);