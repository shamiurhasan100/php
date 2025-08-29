<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email & Password Check</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            background-color: #f5f5f5;
        }
        .box {
            width: 50%;
            margin: 10vh auto;
            padding: 20px;
            border: 1px solid #000;
            background-color: #fff;
        }
        label {
            display: inline-block;
            width: 120px; /* keeps your input alignment */
        }
        input[type="text"], input[type="password"] {
            width: calc(100% - 130px);
            padding: 5px;
        }
        input[type="submit"] {
            margin-top: 10px;
            padding: 5px 10px;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            border: none;
        }
        .message {
            margin-top: 15px;
            font-weight: bold;
        }
        .valid { color: green; }
        .invalid { color: red; }
    </style>
</head>
<body>

<?php
$email = '';
$message = '';
$class = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $set_pass = '1234';

    if ($password === $set_pass) {
        $message = "Password is Valid";
        $class = "valid";
    } else {
        $message = "Wrong Password";
        $class = "invalid";
    }
}
?>

<div class="box">
    <form method="POST">
        <label for="email">Email:</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
        <br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" value="">
        <br><br>

        <input type="submit" value="Check">
    </form>

    <?php if($message != ''): ?>
        <div class="message <?php echo $class; ?>"><?php echo $message; ?></div>
    <?php endif; ?>
</div>

</body>
</html>
