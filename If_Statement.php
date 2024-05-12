<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Statements</title>
</head>
<body>

<?php

//if

$marks = 78;
if($marks > 50){
    echo "You are pass the Exam";
    echo "<br>";
}


//if else

$marks = 78;
if($marks < 50){
    echo "You are pass the Exam";
}else{
    echo "You are fail the exam";
    echo "<br>";
}


//if elseif else
$marks = 45;
if($marks >= 75){
    echo "A";
}elseif ($marks >= 65){
    echo "B";
}elseif ($marks >= 55){
    echo "C";
}elseif ($marks >= 45){
    echo "S";
} else{
    echo "You are fail the exam";
    echo "<br>";
}


//switch statement

$favcolor = "green";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}


?>

</body>
</html>

Link for Self study :- https://www.w3schools.com/php