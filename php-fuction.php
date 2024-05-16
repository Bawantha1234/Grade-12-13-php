<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php

function showName($fname){
    echo "Your Name is :$fname <br>";
}
showName("Pasindu");
showName("Bawantha");

function getSum($num1,$num2){
    $sum = $num1+$num2;
    echo "Sum of two numbers $num1 and $num2 is : $sum<br>";
}

getSum(25,56);

function setAge($name,$age =25){
    echo "$name s age is $age years old <br>";
}

setAge("Pasindu",30);
setAge("Bawantha");
setAge("Gunaya",40);


function getAvarage($num1,$num2,$num3){
    $avg = ($num1+$num2+$num3)/3;
    return $avg;
}
echo "Avarage value is ".getAvarage(75,50,35);

?>

</body>
</html>
