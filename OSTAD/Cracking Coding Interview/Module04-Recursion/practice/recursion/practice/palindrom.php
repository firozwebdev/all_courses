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
    $pattern = ("/[^A-Za-z0-9]/");
    //$str = strtolower(preg_replace("/[^A-Za-z0-9]/",'' , $str));
    $str = preg_replace($pattern, '', $str);
    $str = strtolower($str);
    $i = 0;
    $j = strlen($str)-1;
    return checkPalidrom($str, $i, $j);

}

$output = checkpal("p                      e e p");
echo $output ? "True" : "False";
