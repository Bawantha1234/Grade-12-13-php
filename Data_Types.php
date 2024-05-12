<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Types in PHP</title>
</head>
<body>
<h1 style="color: red">Hello</h1>


<?php

    # String

    $x = "Hello World!";
    $y = "hello world!";
    echo $x;
    echo "<br>";
    echo $y,"<br>";

    # Integer

    $a = 1234;
    var_dump($a);
    echo "<br>";

    $b = -123; // a negative number
    var_dump($b);
    echo "<br>";

    $c = 0123; // octal number
    var_dump($c);
    echo "<br>";

    $d = 0x1A; // hexadecimal number
    var_dump($d);
    echo "<br>";

    $e = 0b11111111; // binary number
    var_dump($e);
    echo "<br>";


    # Float

    $f = 10.365; // float number
    var_dump($f);
    echo "<br>";

    $g = 10.2e3;
    var_dump($g);
    echo "<br>";

    # Boolean

    $h = true; // true
    var_dump($h);
    echo "<br>";

    $i = false; // false
    var_dump($i);
    echo "<br>";


    # Arrays

    $cars = array("Volvo","BMW","Toyota");
    print_r($cars);
    echo "<br>";

    $color_codes = array(
            "Red"=> "#ff0000",
            "Green"=> "#00ff00",
            "Blue"=> "#0000ff");
    print_r($color_codes);
    echo "<br>";

    $num = array(12,34,56);
    $sum = $num[0]+$num[1]+$num[2];
    echo $sum;

?>

</body>
</html>