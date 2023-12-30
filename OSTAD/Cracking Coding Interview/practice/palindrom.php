<?php

class Palindrome{
    public static function checkPalindrome($string){
        return ($string === strrev($string)) ? "True" : "False";
    }
}

echo Palindrome::checkPalindrome("hello");