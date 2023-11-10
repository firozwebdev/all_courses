<?php

function countSubstrOccurrences($haystack, $needle) {
    $count = 0;
    $offset = 0;

    while (($pos = strpos($haystack, $needle, $offset)) !== false) {
        $count++;
        $offset = $pos + strlen($needle);
    }

    return $count;
}

// Example usage
$mainString = "abababab";
$subString = "ab";

$result = countSubstrOccurrences($mainString, $subString);

echo $result;
?>
