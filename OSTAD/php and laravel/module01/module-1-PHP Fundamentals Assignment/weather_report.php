<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
</head>
<body>
<h1>Weather Report</h1>

<?php
// Define variables
$temperature = 0;
$message = "";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the temperature was submitted and is a valid number
    if (isset($_POST["temperature"]) && is_numeric($_POST["temperature"])) {
        $temperature = floatval($_POST["temperature"]);

        // Determine the weather message based on the temperature range
        if ($temperature <= 0) {
            $message = "It's freezing!";
        } elseif ($temperature <= 15) {
            $message = "It's cool.";
        } elseif ($temperature <= 25) {
            $message = "It's warm.";
        } else {
            $message = "It's hot!";
        }
    }
}
?>

<form method="post">
    <label for="temperature">Enter Temperature (in Celsius):</label>
    <input type="text" name="temperature" value="<?php echo $temperature; ?>">
    <input type="submit" value="Check Weather">
</form>

<?php
// Display the weather message if calculated
if (!empty($message)) {
    echo "<h2>Weather:</h2>";
    echo $message;
}
?>

</body>
</html>
