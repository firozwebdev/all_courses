<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
<h1>Grade Calculator</h1>

<?php
// Define variables
$score1 = "";
$score2 = "";
$score3 = "";
$average = "";
$grade = "";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all three test scores were submitted and are valid numbers
    if (
        isset($_POST["score1"]) && is_numeric($_POST["score1"]) &&
        isset($_POST["score2"]) && is_numeric($_POST["score2"]) &&
        isset($_POST["score3"]) && is_numeric($_POST["score3"])
    ) {
        $score1 = floatval($_POST["score1"]);
        $score2 = floatval($_POST["score2"]);
        $score3 = floatval($_POST["score3"]);

        // Calculate the average
        $average = ($score1 + $score2 + $score3) / 3;

        // Determine the corresponding letter grade
        if ($average >= 90) {
            $grade = "A";
        } elseif ($average >= 80) {
            $grade = "B";
        } elseif ($average >= 70) {
            $grade = "C";
        } elseif ($average >= 60) {
            $grade = "D";
        } else {
            $grade = "F";
        }
    }
}
?>

<form method="post">
    <label for="score1">Test Score 1:</label>
    <input type="text" name="score1" value="<?php echo $score1; ?>"><br>

    <label for="score2">Test Score 2:</label>
    <input type="text" name="score2" value="<?php echo $score2; ?>"><br>

    <label for="score3">Test Score 3:</label>
    <input type="text" name="score3" value="<?php echo $score3; ?>"><br>

    <input type="submit" value="Calculate Average and Grade">
</form>

<?php
// Display the average and grade if calculated
if (!empty($average) && !empty($grade)) {
    echo "<h2>Results:</h2>";
    echo "Average Score: $average<br>";
    echo "Letter Grade: $grade";
}
?>

</body>
</html>
