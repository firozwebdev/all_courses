<?php

/* 
Question: What is json_encode()
Answare:  PHP function that converts a PHP value (like arrays or objects) into a JSON-encoded string.
*/

header('Content-Type: application/json');



// Lets Create JSON Object From PHP Asoc Array
$AsocArray=[ "name"=>"Jhon", "age"=>30];
$JSON=json_encode($AsocArray);
echo $JSON; 



// Lets Create JSON Array From PHP Multidimensional Asoc Array
$AsocArray=[
     [ "name"=>"Jhon", "age"=>30],
     [ "name"=>"Mark", "age"=>33]
];
$JSON=json_encode($AsocArray);
echo $JSON; 



