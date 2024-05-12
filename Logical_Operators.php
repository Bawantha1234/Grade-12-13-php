<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logical Operators</title>
</head>
<body>

<?php

//AND

$x = 5;
$y = 3;

if(($x>0)and($y<2)){
    echo "Logicl true";
}else{
    echo "Logical false";
    echo "<br>";
}

//AND

$x = 4;
$y = 6;

if(($x>0)&&($y<2)){
    echo "Logicl true";
}else{
    echo "Logical false";
    echo "<br>";
}

//OR

$x = 3;
$y = 5;

if(($x>0) or ($y<2)){
    echo "Logicl true";
}else{
    echo "Logical false";
    echo "<br>";
}


//OR
$x = 3;
$y = 5;

if(($x>0) || ($y<2)){
    echo "Logicl true";

}else{
    echo "Logical false";
    echo "<br>";
}

//XOR

$x = 3;
$y = 5;

if(($x>0) xor ($y<2)){
    echo "Logicl true";

}else{
    echo "Logical false";
    echo "<br>";
}


//NOT

$x = 3;
$y = 5;

if(!($x>0)){
    echo "Logicl true";

}else{
    echo "Logical false";
    echo "<br>";
}

?>

</body>
</html>
