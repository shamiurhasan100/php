<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    function info($name, $age){
        return "Name: " . htmlspecialchars($name) . "<br>Age: " . htmlspecialchars($age);
    }

    if($_SERVER["REQUEST_METHOD"]=="GET" && isset($_GET["in1"]) && isset($_GET["in2"])){
        $name = $_GET["in1"];
        $age = $_GET["in2"];
        $output = info($name, $age);
        echo $output;
    }
    ?>
</head>
<body>
<form action="" method="get">
    <label for="user">Enter Name</label>
    <input type="text" name="in1" id="user" required><br><br>

    <label for="age">Enter Age</label>
    <input type="number" name="in2" id="age" required><br><br>

    <button type="submit">Submit</button>
</form>
</body>
</html>
