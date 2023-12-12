<?php
/*
 * Peak point element of array , where all will be lower from left side and upper will be right side
 * [5,1,4,3,6,8,10,7,9]
 *
 */


function isPerfectPeak($i,$n,$arr){
    for($j=0;$j<$i;$j++){
        if($arr[$j] >= $arr[$i]){
            return 0;
        }
    }
    for($j = $i+1; $j<=$n-1;$j++){
        if($arr[$j] <= $arr[$i]){
            return 0;
        }
    }
    return 1;
}
function testPeak($arr){
    $n = count($arr);
    for($i = 1;$i<=$n-1;$i++){
        if(isPerfectPeak($i,$n,$arr)){
            return 1;
        }
    }
    return 0;

}

$output = testPeak([5,1,4,4]);
echo $output;