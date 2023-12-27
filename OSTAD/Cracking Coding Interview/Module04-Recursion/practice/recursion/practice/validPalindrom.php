<?php

class Palindrome{
    protected $string;
    function isPalidrome($str) {
        $this->string = $str;
        $i = 0;
        $j = strlen($this->string)-1;
        if($this->checkPalidrome($i, $j)){
            return "True";
        }else{
            return "False";
        }

        
        return false;
    }
    function checkPalidrome($i,$j) {
        if($i>=$j) return true;
        if($this->string[$i] != $this->string[$j]) return false;
        return $this->checkPalidrome($i+1,$j-1);
    }
}

$palidrome = new Palindrome();
echo  $palidrome->isPalidrome("peepu");






