<!DOCTYPE html>
<html>
<head>
    <title>Comparison Tool</title>
</head>
<body>
<h1>Comparison Tool</h1>

<?php
// Define variables
$number1 = "";
$number2 = "";
$result = "";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if both numbers were submitted and are valid
    if (isset($_POST["number1"]) && isset($_POST["number2"]) &&
        is_numeric($_POST["number1"]) && is_numeric($_POST["number2"])) {
        $number1 = floatval($_POST["number1"]);
        $number2 = floatval($_POST["number2"]);

        // Use the ternary operator to determine the larger number
        $result = ($number1 > $number2) ? $number1 : $number2;
    }
}
?>

<form method="post">
    <label for="number1">Enter Number 1:</label>
    <input type="text" name="number1" value="<?php echo $number1; ?>"><br>

    <label for="number2">Enter Number 2:</label>
    <input type="text" name="number2" value="<?php echo $number2; ?>"><br>

    <input type="submit" value="Compare Numbers">
</form>

<?php
// Display the result if calculated
if (!empty($result)) {
    echo "<h2>Result:</h2>";
    echo "The larger number is: $result";
}
?>

</body>
</html>
