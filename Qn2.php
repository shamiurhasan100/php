<!DOCTYPE html>
<html>
<head>
    <title>Even Calculator Generator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        h2 {
            color: #333;
        }
        input[type=number] {
            width: 100px;
            padding: 5px;
            margin-right: 10px;
        }
        button {
            padding: 5px 15px;
            margin-right: 10px;
            cursor: pointer;
        }
        .output-box {
            margin-top: 20px;
            padding: 10px;
            border: 2px solid #4CAF50;
            width: 150px;
            text-align: center;
            font-weight: bold;
            background-color: #f0fff0;
        }
        .form-group {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <h2>Even Calculator Generator</h2>

    <?php
    $num1 = isset($_POST['num1']) ? $_POST['num1'] : '';
    $num2 = isset($_POST['num2']) ? $_POST['num2'] : '';
    $result = '';
    $label = ''; // To show Sum or Sub

    if(isset($_POST['output'])){
        $output = $_POST['output'];

        if($output == 'add'){
            $result = 0;
            for($i = $num1; $i <= $num2; $i++){
                if($i % 2 == 0){
                    $result += $i;
                }
            }
            $label = "Sum = ";
        }
        elseif($output == 'sub'){
            $result = $num1; // start from first number
            for($i = $num1 + 1; $i <= $num2; $i++){
                if($i % 2 == 0){
                    $result -= $i;
                }
            }
            $label = "Sub = ";
        }
    }
    ?>

    <!-- Input Form -->
    <form method="post">
        <div class="form-group">
            Enter first number: <input type="number" name="num1" value="<?php echo $num1; ?>" required>
        </div>
        <div class="form-group">
            Enter second number: <input type="number" name="num2" value="<?php echo $num2; ?>" required>
        </div>

        <button type="submit" name="output" value="add">ADD</button>
        <button type="submit" name="output" value="sub">SUB</button>
    </form>

    <!-- Output Box -->
    <div class="output-box">
        <?php echo $label . $result; ?>
    </div>

</body>
</html>
