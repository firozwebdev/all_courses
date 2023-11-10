<?php

//function countSubstrOccurrences($haystack, $needle) {
//    $count = 0;
//    $position = strpos($haystack, $needle);
//
//    while ($position !== false) {
//        $count++;
//        $position = strpos($haystack, $needle, $position + strlen($needle));
//    }
//
//    return $count;
//}
function countSubstrOccurrences($haystack, $needle) {
    $count = 0;
    $position = 0;

    while (($position = strpos($haystack, $needle, $position)) !== false) {
        $count++;
        $position++;
    }

    return $count;
}
//fscanf(STDIN,"%s %s",$mainString,$subString);
// Example usage
$mainString = "aaaaaaa";
$subString = "aa";

$result = countSubstrOccurrences($mainString, $subString);

echo "The substring '$subString' appears $result times in the main string '$mainString'.";


//fscanf(STDIN,"%s %s", $first,$second);