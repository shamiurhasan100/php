<!DOCTYPE html>
<html>
<head>
    <title>Strong Number Checker</title>
</head>
<body>
    <h2>Check Strong Number</h2>

    <!-- Input Form -->
    <form method="post">
        Enter a number: <input type="number" name="num" required>
        <input type="submit" value="Check">
    </form>

<?php
function factorial($n) {
    $fact = 1;
    for ($i = 1; $i <= $n; $i++) {
        $fact *= $i;
    }
    return $fact;
}

function isStrong($num) {
    $sum = 0;
    $temp = $num;
    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += factorial($digit);
        $temp = (int)($temp / 10);
    }
    return $num == $sum;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["num"])) {
    $num = $_POST["num"];

    if (isStrong($num)) {
        echo "<p>$num is a Strong Number</p>";
    } else {
        echo "<p>$num is NOT a Strong Number</p>";
    }
}
?>
</body>
</html>
