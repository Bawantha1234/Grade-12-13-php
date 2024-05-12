<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assignment Operators</title>
</head>
<body>
<h1 style="color: red">Hello</h1>

<?php

$x = 25;
$y = 35;
$z = "25";

var_dump($x==$z);//bool(true)
var_dump($x === $z);//bool(false)
var_dump($x != $y);//bool(true)
var_dump($x !== $z);//bool(true)
var_dump($x < $y);//bool(true)
var_dump($x > $y);//bool(false)
var_dump($x <= $y);//bool(true)
var_dump($x >= $y);//bool(false)

?>

</body>
</html>
