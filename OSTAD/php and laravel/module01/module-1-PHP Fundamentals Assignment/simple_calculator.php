<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
<h1>Simple Calculator</h1>

<?php
// Define variables
$num1 = "";
$num2 = "";
$operation = "";
$result = "";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if both numbers were submitted and are valid
    if (isset($_POST["num1"]) && isset($_POST["num2"]) &&
        is_numeric($_POST["num1"]) && is_numeric($_POST["num2"])) {
        $num1 = floatval($_POST["num1"]);
        $num2 = floatval($_POST["num2"]);

        // Check which operation was selected
        if (isset($_POST["operation"])) {
            $operation = $_POST["operation"];
            switch ($operation) {
                case 'addition':
                    $result = $num1 + $num2;
                    break;
                case 'subtraction':
                    $result = $num1 - $num2;
                    break;
                case 'multiplication':
                    $result = $num1 * $num2;
                    break;
                case 'division':
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = "Division by zero is not allowed.";
                    }
                    break;
                default:
                    $result = "Invalid operation selected.";
                    break;
            }
        }
    }
}
?>

<form method="post">
    <label for="num1">Enter Number 1:</label>
    <input type="text" name="num1" value="<?php echo $num1; ?>"><br>

    <label for="num2">Enter Number 2:</label>
    <input type="text" name="num2" value="<?php echo $num2; ?>"><br>

    <label for="operation">Select Operation:</label>
    <select name="operation">
        <option value="addition">Addition</option>
        <option value="subtraction">Subtraction</option>
        <option value="multiplication">Multiplication</option>
        <option value="division">Division</option>
    </select><br>

    <input type="submit" value="Calculate">
</form>

<?php
// Display the result if calculated
if (!empty($result)) {
    echo "<h2>Result:</h2>";
    echo "The result of $num1 $operation $num2 is: $result";
}
?>

</body>
</html>
