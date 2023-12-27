<?php

class Palindrome{
    public $string;
  
    function isPalidrome($str) {
        $this->string = strtolower(preg_replace("/[^A-Za-z0-9]/",'' , $str));
        //$this->string = strtolower($str);
        $i = 0;
        $j = strlen($this->string)-1;
        if($this->checkPalidrome($i, $j)){
            return "True";
        }else{
            return "False";
        }

        
       
    }
    function checkPalidrome($i,$j) {
        if($i>=$j) return true;
        if($this->string[$i] != $this->string[$j]) return false;
        return $this->checkPalidrome($i+1,$j-1);
    }
}

$palidrome = new Palindrome();

echo  $palidrome->isPalidrome("pe e p");






