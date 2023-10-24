<?php

/* 
Question: What is file_get_contents()?  
Answare: PHP function used primarily to read a file into a string

Question:What is $_SERVER["REQUEST_METHOD"]
Answare: PHP superglobal array element that returns the request method used to access the page.

Question: What is json_decode()
Answare:  PHP function that takes a JSON encoded string and converts it into a PHP variable
*/

header('Content-Type: application/json');




// Lets Work With POST Method & JSON Decode
if ($_SERVER["REQUEST_METHOD"] == "POST") {

     $StringData = file_get_contents("php://input");

     $PHPAsocArray = json_decode($StringData, true);  

     print_r($PHPAsocArray); 
}





// Lets Work With POST Method & JSON Encode

if ($_SERVER["REQUEST_METHOD"] == "GET") {

        $StringData = file_get_contents("php://input");
   
        $PHPAsocArray = json_decode($StringData, true);  

        $JSON=json_encode($PHPAsocArray);
   
        echo $JSON; 
   }
   


