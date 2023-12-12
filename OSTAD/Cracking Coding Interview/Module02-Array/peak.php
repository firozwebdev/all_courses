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

function optimizedPeakMethod($arr){
    $n = count($arr);
    $leftMax[0] = $arr[0];
    for($i=1;$i<$n;$i++){
        $leftMax[$i] = max($leftMax[$i-1],$leftMax[$i-1]);

    }

    $rightMin[$n-1] = $arr[$n-1];
    for($i = $n-2; $i>=0; $i--){
        $rightMin[$i] = min($rightMin[$i+1],$arr[$i+1]);
    }

    for($i = 1;$i<=$n-1;$i++){
        if($arr[$i] > $leftMax[$i] && $arr[$i] < $rightMin[$i]){
            return 1;
        }
    }
    return 0;
}



$output = optimizedPeakMethod([5,1,6,7,9,8]);
echo $output;
