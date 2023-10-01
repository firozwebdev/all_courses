<?php
// Task 1:
$student = ['name' => 'Alice', 'age' => 22, 'grade' => 'A'];
echo "{$student['age']}\n";

// Task 2:
$student = ['name' => 'Alice', 'age' => 22, 'grade' => 'A'];
if(array_key_exists('grade', $student)){
    echo "{$student['name']} has got {$student['grade']} grade\n";
}else{
    echo "Grade is not found \n";
}


// Task 3:
$numbers = [100, 200, 50, 40, 50];
foreach($numbers as $number){
    echo "Number is: {$number} \n";
}

// Task 4:
$names = ['Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin', 'Moni'];

function startsWithM($name) {
    return strtoupper(substr($name, 0, 1)) === 'M';
}
$filteredNames = array_filter($names, 'startsWithM');


echo "Names that start with 'M':\n";
foreach ($filteredNames as $name) {
    echo "$name\n";
}

// Task 5:
$originalString =  'Hello, World!';
echo  strrev($originalString);