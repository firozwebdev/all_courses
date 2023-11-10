<?php

function isRotation($str1, $str2) {
    // Check if the lengths of both strings are the same
    if (strlen($str1) != strlen($str2)) {
        return false;
    }

    // Concatenate str1 with itself and check if str2 is a substring
    $concatenatedStr1 = $str1 . $str1;

    return strpos($concatenatedStr1, $str2) !== false;
}

// Example usage
$string1 = "abc";
$string2 = "ab";

if (isRotation($string1, $string2)) {
    echo "True";
} else {
    echo "False";
}

/*
 * <?php

function isRotation($str1, $str2) {
    // Check if the lengths of both strings are the same
    if (strlen($str1) != strlen($str2)) {
        return false;
    }

    // Concatenate str1 with itself and check if str2 is a substring
    $concatenatedStr1 = $str1 . $str1;

    return strpos($concatenatedStr1, $str2) !== false;
}

// Example usage
fscanf(STDIN,"%s %s",$string1,$string2);

if (isRotation($string1, $string2)) {
    echo "True";
} else {
    echo "False";
}



 */


