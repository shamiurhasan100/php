<!DOCTYPE html>
<html>
<head>
    <title>Print Sequence Number</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            background-color: #f9f9f9;
        }
        h2 {
            color: #333;
        }
        input[type=number] {
            width: 80px;
            padding: 5px;
            margin-right: 10px;
        }
        input[type=submit] {
            padding: 5px 15px;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 3px;
        }
        .output-box {
            margin-top: 20px;
            padding: 10px;
            border: 2px solid #4CAF50;
            width: max-content;
            font-weight: bold;
            background-color: #f0fff0;
        }
        form {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<h2>Print Sequence Number</h2>

<?php
$n = isset($_POST['n']) ? $_POST['n'] : '';
?>

<form method="post">
    Enter a number: <input type="number" name="n" value="<?php echo $n; ?>" required>
    <input type="submit" name="submit" value="Generate">
</form>

<?php
if(isset($_POST['submit'])){
    echo '<div class="output-box">';
    for($i = 0, $value = 1; $i < $n; $i++, $value += 3){
        echo $value . " ";
    }
    echo '</div>';
}
?>

</body>
</html>
