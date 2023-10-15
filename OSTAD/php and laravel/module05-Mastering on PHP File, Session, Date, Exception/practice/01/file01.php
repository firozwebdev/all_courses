<?php
$fileName = 'data/data.txt';
$fp = fopen($fileName,'r');
$line = fgets($fp);
echo $line;
$line = fgets($fp);
echo $line;
$line = fgets($fp);
echo $line;
fclose($fp);
