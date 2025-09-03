<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

class Display {
    public $a, $b, $sum, $sub, $multi, $div;


    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }

  
    public function sum() {
        $this->sum = $this->a + $this->b;
        return $this->sum;
    }
    public function sub() {
        $this->sub = $this->a - $this->b;
        return $this->sub;
    }
    public function multi() {
        $this->multi = $this->a * $this->b;
        return $this->multi;
    }
    public function div() {
        $this->div = $this->a / $this->b;
        return $this->div;
    }
}


$obj = new Display(20, 10);

$output1 = $obj->sum();
$output2 = $obj->sub();
$output3 = $obj->multi();
$output4 = $obj->div();

echo "Sum is: " . $output1;
echo "<br>Sub is: " . $output2;
echo "<br>Multi is: " . $output3;
echo "<br>Div is: " . $output4;


?>
</body>
</html>
