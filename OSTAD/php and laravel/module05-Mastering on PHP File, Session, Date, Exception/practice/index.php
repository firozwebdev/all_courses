<?php
$fileName = './01/data/data.txt';
$fp = fopen($fileName,'r');
while($line = fgets($fp)){
    echo $line ."<br>";
}
rewind($fp);
while($line = fgets($fp)){
    echo $line."<br>";
}
fclose($fp);