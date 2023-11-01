<?php
/*
 * Task 1:

Write a PHP code to read the content of a text file and display it on the webpage.

Use the following template:

<?php



$file = '{{file_path}}';



// Open the file




// Read the content of the file




// Close the file




// Display the content




?>
 */

/*
 * Task - 01
 */
$file = 'file.txt'; // Replace 'path/to/your/file.txt' with the actual file path

// Open the file
$handle = fopen($file, 'r');

// Check if the file was opened successfully
if ($handle) {
    // Read the content of the file
    $content = fread($handle, filesize($file));

    // Close the file
    fclose($handle);

    // Display the content
    echo nl2br($content); // nl2br() function is used to preserve line breaks in HTML
} else {
    echo "Error opening the file.";
}

/*
 * Task - 02
 */


$file = 'file.txt'; // Replace 'path/to/your/file.txt' with the actual file path
$data = ' And what about you?'; // Replace 'New data to be appended' with the data you want to append

// Open the file in append mode
$handle = fopen($file, 'a');

// Check if the file was opened successfully
if ($handle) {
    // Write the data to the file
    fwrite($handle, $data . PHP_EOL); // PHP_EOL represents a newline character, ensuring each entry is on a new line
    fclose($handle);
} else {
    echo "Error opening the file.";
}



