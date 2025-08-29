<!DOCTYPE html>
<html>
<head>
    <title>Personal Info Display</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        label {
            display: inline-block;
            width: 120px; /* uniform width for alignment */
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"], select {
            width: 200px;
            padding: 5px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            padding: 5px 10px;
            margin-top: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        .output-box {
            margin-top: 20px;
            padding: 15px;
            border: 2px solid #4CAF50;
            width: 250px;
            font-weight: bold;
            text-align: left;
            background-color: #f9f9f9;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<form method="GET">

    <label for="input1">Name:</label>
    <input type="text" name="input1" value="<?php if(isset($_GET['input1'])) echo $_GET['input1']; ?>">
    <br>

    <label for="input2">ID:</label>
    <input type="text" name="input2" value="<?php if(isset($_GET['input2'])) echo $_GET['input2']; ?>">
    <br>

    <label for="input3">Phone Number:</label>
    <input type="text" name="input3" value="<?php if(isset($_GET['input3'])) echo $_GET['input3']; ?>">
    <br>

    <label for="input4">Gender:</label>
    <select name="input4">
        <option value="">Select</option>
        <option value="Male" <?php if(isset($_GET['input4']) && $_GET['input4']=="Male") echo "selected"; ?>>Male</option>
        <option value="Female" <?php if(isset($_GET['input4']) && $_GET['input4']=="Female") echo "selected"; ?>>Female</option>
        <option value="Other" <?php if(isset($_GET['input4']) && $_GET['input4']=="Other") echo "selected"; ?>>Other</option>
    </select>
    <br>

    <label for="input5">Blood Group:</label>
    <select name="input5">
        <option value="">Select</option>
        <option value="A+" <?php if(isset($_GET['input5']) && $_GET['input5']=="A+") echo "selected"; ?>>A+</option>
        <option value="A-" <?php if(isset($_GET['input5']) && $_GET['input5']=="A-") echo "selected"; ?>>A-</option>
        <option value="B+" <?php if(isset($_GET['input5']) && $_GET['input5']=="B+") echo "selected"; ?>>B+</option>
        <option value="B-" <?php if(isset($_GET['input5']) && $_GET['input5']=="B-") echo "selected"; ?>>B-</option>
        <option value="O+" <?php if(isset($_GET['input5']) && $_GET['input5']=="O+") echo "selected"; ?>>O+</option>
        <option value="O-" <?php if(isset($_GET['input5']) && $_GET['input5']=="O-") echo "selected"; ?>>O-</option>
        <option value="AB+" <?php if(isset($_GET['input5']) && $_GET['input5']=="AB+") echo "selected"; ?>>AB+</option>
        <option value="AB-" <?php if(isset($_GET['input5']) && $_GET['input5']=="AB-") echo "selected"; ?>>AB-</option>
    </select>
    <br>

    <input type="submit" value="Submit">

</form>

<?php
if(isset($_GET['input1']) && $_GET['input1'] != '') {
    $name = $_GET['input1'];
    $id = $_GET['input2'];
    $phone = $_GET['input3'];
    $gender = $_GET['input4'];
    $blood = $_GET['input5'];
    echo '<div class="output-box">';
    echo "Name: $name<br>";
    echo "ID: $id<br>";
    echo "Phone Number: $phone<br>";
    echo "Gender: $gender<br>";
    echo "Blood Group: $blood<br>";
    echo '</div>';
}
?>

</body>
</html>
