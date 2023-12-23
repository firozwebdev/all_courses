<?php
function checkPalidrom($str,$i,$j) {
    if($i>=$j){
        return true;
    }
    if($str[$i]!=$str[$j]){
        return false;
    }
    return checkPalidrom($str,$i+1,$j-1);
}
function checkpal($str) {
    //$pattern = (['^a-zA-Z0-9']);
    $str = strtolower($str);
    $i = 0;
    $j = strlen($str)-1;
    return checkPalidrom($str, $i, $j);

}

$output = checkpal("peep");
echo $output ? "True" : "False";
