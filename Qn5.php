<!DOCTYPE html>
<html>
<head>
    <title>Print Sequence Number</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        form {
            display: flex;
            align-items: center;
            gap: 10px; /* space between input and button */
        }
        input[type="number"] {
            width: 100px;
            padding: 5px;
        }
        input[type="submit"] {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        .output-box {
            margin-top: 20px;
            padding: 10px;
            border: 2px solid #4CAF50;
            width: fit-content;
            font-weight: bold;
            text-align: left;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h2>Print Square Sequence</h2>
    <form method="GET">
        <label>Enter a number:</label>
        <input type="number" name="num" min="1" required>
        <input type="submit" value="Generate Sequence">
    </form>

    <?php 
    if(isset($_GET['num']) && $_GET['num'] > 0){
        $n = intval($_GET['num']);
        echo '<div class="output-box">';
        for($i=1; $i<=$n; $i++){
            echo $i*$i . " ";
        }
        echo '</div>';
    } 
    ?>
</body>
</html>
