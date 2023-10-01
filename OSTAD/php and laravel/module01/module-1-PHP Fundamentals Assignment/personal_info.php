<?php
$my_name = 'Firoz Rahman Sabuz';
$age = 35;
$country = 'Bangladesh .';
$brief_introduction = " I am a php, Laravel developer, I want to learn more. ";

printf("<h1>My name is %s and age is %d and my country is %s </h1>",$my_name,$age,$country );

printf("<h2>About brief information about mine is- %s</h2>",$brief_introduction);

echo '<b>';
echo 'My name is: '. $my_name .' .</br>';
echo 'I am '. $age .' years old .</br>';
echo 'I live in '.$country .' </br>';
echo 'About Myself: '. $brief_introduction .'</br>';
echo '</b>';