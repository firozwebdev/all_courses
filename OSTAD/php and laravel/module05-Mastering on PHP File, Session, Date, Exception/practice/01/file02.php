<?php
$fileName = 'data/data.txt';
$fp = fopen($fileName,'r');
while($line = fgets($fp)){
    echo $line;
}
rewind($fp);
while($line = fgets($fp)){
    echo $line;
}
fclose($fp);