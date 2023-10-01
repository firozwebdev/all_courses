<?php

/*Create a multidimensional array called $studentGrades to store the grades of three students.
Each student has grades for three subjects: Math, English, and Science.
Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.

 */


function calculateAverageGrades($studentGrades)
{
    foreach ($studentGrades as $student => $grades) {
        $total = array_sum($grades);
        $count = count($grades);
        $average = round($total / $count);

        echo "Student $student: Average Grade = {$average}\n";
    }
}

// Create a multidimensional array to store student grades
$studentGrades = array(
    'Student 1' => ['Math' => 85, 'English' => 92, 'Science' => 78],
    'Student 2' => ['Math' => 88, 'English' => 95, 'Science' => 90],
    'Student 3' => ['Math' => 75, 'English' => 82, 'Science' => 70]
);

// Call the function to calculate and print average grades
calculateAverageGrades($studentGrades);

