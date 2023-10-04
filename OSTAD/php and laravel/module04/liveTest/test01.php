<?php
 /*
  * Test-01
  */
class Person {

// attributes

    private string $name;

    private int $age;



// constructor

    public function __construct($name, $age) {

        $this->name = $name;
        $this->age = $age;

    }



// method

    public function introduce() {

        echo "My name is {$this->name } and I am {$this->age} years old. \n";

    }

}



//Example:

$person = new Person("John", 30);

$person->introduce();


/*
 * Test - 02
 * Expected Output:

My name is Alice, I am 18 years old.

My grade percentage is 85%.
 */

class Student extends Person {

// attribute
private string $mark;


// constructor
public function __construct($name, $age,$mark)
{
    //parent::__construct($name,$age);
    $this->name = $name;
    $this->age = $age;
    $this->mark = $mark;
}


// method



// method override

    public function introduce() {

        echo "My name is  {$this->name }, I am {$this->age} years old. \n";

    }

// additional method

    public function calculate_grade_percentage() {

        // Assume that the mark is out of 100

        // Implement your logic to calculate the mark percentage here
        return "{$this->mark}%";


    }





}

//Example:

$student = new Student("Alice", 18, "85");

$student->introduce();

$gradePercentage = $student->calculate_grade_percentage();

echo "My grade percentage is {$gradePercentage}.\n";