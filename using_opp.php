<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>

<?php
class oop {
    public $a;
    public $b;
    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }
    public function add() {
        return $this->a + $this->b;
    }
    public function sub() {
        return $this->a - $this->b;
    }
    public function mul() {
        return $this->a * $this->b;
    }
    public function div() {
        if ($this->b == 0) return "Undefined";
        return $this->a / $this->b;
    }
}
$result = "";
$in1 = "";
$in2 = "";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["in1"]) && isset($_GET["in2"])) {
        $in1 = $_GET["in1"];
        $in2 = $_GET["in2"];
        $obj = new oop($in1, $in2);
        if (isset($_GET["add"])) {
            $result = $obj->add();
        } elseif (isset($_GET["sub"])) {
            $result = $obj->sub();
        } elseif (isset($_GET["mul"])) {
            $result = $obj->mul();
        } elseif (isset($_GET["div"])) {
            $result = $obj->div();
        }
    }
}
?>

<form action="" method="get">
    <label for="in1">Input 1</label>
    <input type="number" name="in1" value="<?= htmlspecialchars($in1) ?>"><br><br>
    <label for="in2">Input 2</label>
    <input type="number" name="in2" value="<?= htmlspecialchars($in2) ?>"><br><br>
    <label for="out">Output</label>
    <input type="text" name="out" value="<?= htmlspecialchars($result) ?>" readonly><br><br>

    <button type="submit" name="add">Addition</button><br><br>
    <button type="submit" name="sub">Subtraction</button><br><br>
    <button type="submit" name="mul">Multiplication</button><br><br>
    <button type="submit" name="div">Divison</button><br><br>
</form>

</body>
</html>
