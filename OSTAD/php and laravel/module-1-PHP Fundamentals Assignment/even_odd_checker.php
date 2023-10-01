<!DOCTYPE html>
<html>
<head>
    <title>Even-Odd Checker</title>
</head>
<body>
<h1>Even-Odd Checker</h1>

<?php
// Define variables
$number = "";
$result = "";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the number was submitted and is a valid integer
    if (isset($_POST["number"]) && is_numeric($_POST["number"])) {
        $number = intval($_POST["number"]);

        // Check if the number is even or odd
        if ($number % 2 == 0) {
            $result = "Even";
        } else {
            $result = "Odd";
        }
    }
}
?>

<form method="post">
    <label for="number">Enter a Number:</label>
    <input type="text" name="number" value="<?php echo $number; ?>">
    <input type="submit" value="Check">
</form>

<?php
// Display the result if calculated
if (!empty($result)) {
    echo "<h2>Result:</h2>";
    echo "The number $number is $result.";
}
?>

</body>
</html>
