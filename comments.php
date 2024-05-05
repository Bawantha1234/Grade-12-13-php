<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php</title>
</head>
<body>
<h1 style="color: red">Hello</h1>


<?php

#PHP COMMENTS

// This is single line comment

# This is single line comment

/* This is multiple line comment
This is multiple line comment*/

//$x = 5 /* +15 */  +5;
//echo $x;

?>

<?php

# Define Local Variable
//function pasindu(){
  //  $x = 5;
  // echo "x value : ",$x;
// }
//  pasindu();

?>


<?php
# Define Global Variable

$a = 5; $b = 10;
function bawantha(){
    global $a; global $b;
    echo "a value : ", $a;
    echo "<br>","b value : ",$b;
}
bawantha();
?>

</body>
</html>