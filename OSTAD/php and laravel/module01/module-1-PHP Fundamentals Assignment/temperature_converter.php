<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>
<h1>Temperature Converter</h1>

<?php
// Define variables
$celsius = "";
$fahrenheit = "";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if Celsius was submitted and is a valid number
    if (isset($_POST["celsius"]) && is_numeric($_POST["celsius"])) {
        $celsius = floatval($_POST["celsius"]);
        $fahrenheit = ($celsius * 9/5) + 32;
    }

    // Check if Fahrenheit was submitted and is a valid number
    if (isset($_POST["fahrenheit"]) && is_numeric($_POST["fahrenheit"])) {
        $fahrenheit = floatval($_POST["fahrenheit"]);
        $celsius = ($fahrenheit - 32) * 5/9;
    }
}
?>

<form method="post">
    <label for="celsius">Celsius:</label>
    <input type="text" name="celsius" value="<?php echo $celsius; ?>">
    <input type="submit" value="Convert to Fahrenheit">
</form>

<form method="post">
    <label for="fahrenheit">Fahrenheit:</label>
    <input type="text" name="fahrenheit" value="<?php echo $fahrenheit; ?>">
    <input type="submit" value="Convert to Celsius">
</form>

</body>
</html>